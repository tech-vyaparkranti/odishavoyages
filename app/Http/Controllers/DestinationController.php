<?php
namespace App\Http\Controllers;

use App\Http\Requests\DestinationMasterRequest;
use App\Models\DestinationsModel;
use App\Traits\CommonFunctions;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Yajra\DataTables\Facades\DataTables;

class DestinationController extends Controller
{
    protected $name = "";
    protected $password = "";
    protected $value_partner_id = "";
    protected $user_id = null;
    use CommonFunctions;

    public function destinationMaster()
    {
        return view("Dashboard.Pages.destinationsAdmin");
    }

    public function saveDestinations(DestinationMasterRequest $request)
    {
        Cache::forget('destination_master');
        switch ($request->input("action")) {
            case "insert":
                $return = $this->insertDestination($request);
                break;
            case "update":
                $return = $this->updateDestination($request);
                break;
            case "enable":
                $return = $this->enableDestination($request);
                break;
            case "disable":
                $return = $this->disableDestination($request);
                break;
            default:
                $return = ["status" => false, "message" => "Unknown action.", "data" => null];
        }
        return response()->json($return);
    }

    public function insertDestination(DestinationMasterRequest $request)
{
    $checkDuplicate = DestinationsModel::where(DestinationsModel::DESTINATION_NAME, $request->input(DestinationsModel::DESTINATION_NAME))->first();
    $images = [];
    
    if ($request->hasFile(DestinationsModel::DESTINATION_IMAGE)) {
        // Handle multiple image upload
        $images = $this->uploadMultipleImages($request, DestinationsModel::DESTINATION_IMAGE);
        
        // Remove duplicates from the image array
        $images = array_unique($images);
    }

    if ($checkDuplicate) {
        $return = $this->returnMessage("Destination name is already taken");
    } else {
        $createNewDestination = new DestinationsModel();
        
        if (!empty($images)) {
            $createNewDestination->{DestinationsModel::DESTINATION_IMAGE} = json_encode($images);  // Store images as JSON
        }
        
        $createNewDestination->{DestinationsModel::DESTINATION_NAME} = $request->input(DestinationsModel::DESTINATION_NAME);
        $createNewDestination->{DestinationsModel::DESTINATION_DETAILS} = $request->input(DestinationsModel::DESTINATION_DETAILS);
        $createNewDestination->{DestinationsModel::POSITION} = $request->input(DestinationsModel::POSITION);
        $createNewDestination->{DestinationsModel::META_TITLE} = $request->input(DestinationsModel::META_TITLE);
        $createNewDestination->{DestinationsModel::META_KEYWORD} = $request->input(DestinationsModel::META_KEYWORD);
        $createNewDestination->{DestinationsModel::META_DESCRIPTION} = $request->input(DestinationsModel::META_DESCRIPTION);
        $createNewDestination->{DestinationsModel::STATUS} = 1;
        $createNewDestination->{DestinationsModel::CREATED_BY} = Auth::user()->id;
        $createNewDestination->save();

        $return = $this->returnMessage("Saved successfully.", true);
    }
    return $return;
}

    public function uploadMultipleImages(FormRequest $request, $fieldName)
    {
        $images = [];
        if ($request->hasFile($fieldName)) {
            foreach ($request->file($fieldName) as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('website/uploads/destination_images', $filename, 'public');
                $images[] = $path;
            }
        }
        return $images;  // Return array of image paths
    }

    public function updateDestination(DestinationMasterRequest $request)
    {
        $checkDuplicate = DestinationsModel::where(DestinationsModel::DESTINATION_NAME, $request->input(DestinationsModel::DESTINATION_NAME))
            ->where(DestinationsModel::ID, "<>", $request->input(DestinationsModel::ID))->first();
    
        if ($checkDuplicate) {
            $return = $this->returnMessage("Destination name is already taken");
        } else {
            $updateModel = DestinationsModel::find($request->input(DestinationsModel::ID));
            $images = [];
    
            // Check if new images were uploaded
            if ($request->hasFile(DestinationsModel::DESTINATION_IMAGE)) {
                // Handle multiple image upload for update
                $images = $this->uploadMultipleImages($request, DestinationsModel::DESTINATION_IMAGE);
                
                // Remove duplicates from the image array
                $images = array_unique($images);
    
                if (!empty($images)) {
                    $updateModel->{DestinationsModel::DESTINATION_IMAGE} = json_encode($images);  // Store new images as JSON
                }
            }
    
            $updateModel->{DestinationsModel::DESTINATION_NAME} = $request->input(DestinationsModel::DESTINATION_NAME);
            $updateModel->{DestinationsModel::POSITION} = $request->input(DestinationsModel::POSITION);
            $updateModel->{DestinationsModel::DESTINATION_DETAILS} = $request->input(DestinationsModel::DESTINATION_DETAILS);
            $updateModel->{DestinationsModel::META_TITLE} = $request->input(DestinationsModel::META_TITLE);
            $updateModel->{DestinationsModel::META_KEYWORD} = $request->input(DestinationsModel::META_KEYWORD);
            $updateModel->{DestinationsModel::META_DESCRIPTION} = $request->input(DestinationsModel::META_DESCRIPTION);
            $updateModel->{DestinationsModel::STATUS} = 1;
            $updateModel->{DestinationsModel::UPDATED_BY} = Auth::user()->id;
            $updateModel->save();
    
            $return = $this->returnMessage("Updated successfully.", true);
        }
        return $return;
    }
    


    public function enableDestination(DestinationMasterRequest $request)
    {
        $check = DestinationsModel::where(DestinationsModel::ID, $request->input(DestinationsModel::ID))->first();
        if ($check) {
            $check->{DestinationsModel::STATUS} = 1;
            $check->{DestinationsModel::UPDATED_BY} = Auth::user()->id;
            $check->save();
            $return = $this->returnMessage("Enabled successfully.", true);
        } else {
            $return = $this->returnMessage("Details not found.");
        }
        return $return;
    }

    public function disableDestination(DestinationMasterRequest $request)
    {
        $check = DestinationsModel::where(DestinationsModel::ID, $request->input(DestinationsModel::ID))->first();
        if ($check) {
            $check->{DestinationsModel::STATUS} = 0;
            $check->{DestinationsModel::UPDATED_BY} = Auth::user()->id;
            $check->save();
            $return = $this->returnMessage("Disabled successfully.", true);
        } else {
            $return = $this->returnMessage("Details not found.");
        }
        return $return;
    }

    public function destinationsData()
{
    try {
        $query = DestinationsModel::select(
            DestinationsModel::DESTINATION_NAME,
            DestinationsModel::DESTINATION_IMAGE,
            DestinationsModel::DESTINATION_DETAILS,
            DestinationsModel::META_TITLE,
            DestinationsModel::META_KEYWORD,
            DestinationsModel::META_DESCRIPTION,
            DestinationsModel::POSITION,
            DestinationsModel::STATUS,
            DestinationsModel::ID
        );

        return DataTables::of($query)
            ->addIndexColumn()

            // Handle image rendering
            ->addColumn('destination_image', function ($row) {
                $images = is_string($row->destination_image)
                    ? json_decode($row->destination_image, true)
                    : $row->destination_image;

                if (is_array($images) && !empty($images)) {
                    $html = '';
                    foreach ($images as $image) {
                        $html .= '<img alt="Destination Image" src="' . asset('storage/' . $image) . '" class="img-thumbnail" style="max-width: 100px;"> ';
                    }
                    return $html;
                }
                return 'No Image Available';
            })

            // Handle any array field formatting like destination details, if needed
            ->addColumn('destination_details', function ($row) {
                return nl2br(e($row->destination_details)); // Convert newlines to <br> in destination details
            })

            // Action Buttons (Edit, Enable/Disable)
            ->addColumn('action', function ($row) {
                $btn_edit = '<a data-row="' . base64_encode(json_encode($row)) . '" href="javascript:void(0)" class="edit btn btn-primary btn-sm">Edit</a>';
                $btn_disable = ' <a href="javascript:void(0)" onclick="Disable(' . $row->{DestinationsModel::ID} . ')" class="btn btn-danger btn-sm">Disable Destination</a>';
                $btn_enable = ' <a href="javascript:void(0)" onclick="Enable(' . $row->{DestinationsModel::ID} . ')" class="btn btn-primary btn-sm">Enable Destination</a>';
                if ($row->{DestinationsModel::STATUS} == 1) {
                    return $btn_edit . $btn_disable;
                } else {
                    return $btn_edit . $btn_enable;
                }
            })
            ->rawColumns(['destination_image', 'destination_details', 'action'])
            ->make(true);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}


    public function getHomePageDestinations()
    {
        $data = $this->allDestinations();
        if (count($data) > 3) {
            $data = collect($data)->splice(0, 3);
        }
        return response()->json($data);
    }

    public function allDestinations()
    {
        return Cache::rememberForever('destinations', function () {
            return DestinationsModel::where(DestinationsModel::STATUS, 1)
                ->select(DestinationsModel::DESTINATION_NAME,
                    DestinationsModel::DESTINATION_DETAILS,DestinationsModel::META_TITLE,DestinationsModel::META_KEYWORD,DestinationsModel::META_DESCRIPTION,
                    DestinationsModel::DESTINATION_IMAGE)
                ->orderBy(DestinationsModel::POSITION, "asc")->get();
        });
    }
}
