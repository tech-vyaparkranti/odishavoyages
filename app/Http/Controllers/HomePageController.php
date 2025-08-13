<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Blog;
use App\Models\NavMenu;
use App\Models\GalleryItem;
use App\Models\SliderModel;
use App\Models\HomeFaqModel;
use Illuminate\Http\Request;
use App\Models\PackageMaster;
use App\Models\WebSiteElements;
use App\Traits\CommonFunctions;
use App\Models\TestimonialModel;
use App\Models\DestinationsModel;
use Mews\Captcha\Facades\Captcha;
use App\Models\HomeRecognitionsModel;

class HomePageController extends Controller
{
    use CommonFunctions;

    public function homePage()
    {
        try {
            $sliders = SliderModel::where([
                [SliderModel::SLIDE_STATUS, SliderModel::SLIDE_STATUS_LIVE],
                [SliderModel::SLIDE_STATUS, 1]
            ])->orderBy(SliderModel::SLIDE_SORTING, "desc")->get();
            $getPackages = (new PackageMasterController())->getActivePackages();
            $packageCategory = (new PackageCategoryController())->getActivePackagesCategoryData();
            $data = $this->getElement();
            $packages = PackageMaster::where(PackageMaster::STATUS, "1")->get();
            $destinations = PackageMaster::distinct()->pluck('package_country')->toArray();
            $travelCategories = PackageMaster::distinct()->pluck('package_type')->toArray();
            $home_recognitions=HomeRecognitionsModel::where('slide_status','live')->get();
            $blogs = Blog::where(Blog::BLOG_STATUS, Blog::BLOG_STATUS_LIVE)
                ->orderBy(Blog::BLOG_SORTING, 'desc')
                ->get();
                $homedestinations = DestinationsModel::where('status','1')->get();
            return view("HomePage.dynamicHomePage", compact('getPackages', 'packageCategory', 'packages', 'destinations', 'travelCategories', 'sliders', 'blogs','home_recognitions','homedestinations'), $data);
        } catch (Exception $exception) {
            echo $exception->getMessage();
            return false;
        }
    }
    // public function dynamicHomePage(){
    //     return view("HomePage.dynamicHomePage");
    // }
    public function aboutUs()
    {
        $data = $this->getElement();
        $home_recognitions=HomeRecognitionsModel::where('slide_status','live')->get();
        $testimonial=TestimonialModel::where('slide_status','live')->get();
        return view("HomePage.aboutUs", $data,compact('home_recognitions','testimonial'));
    }
    public function termsConditions()
    {
        $data = $this->getElement();
        return view("HomePage.termsConditions", $data);
    }
    public function shippingDeliverypolicy()
    {
        $data = $this->getElement();
        return view("HomePage.shippingDeliverypolicy", $data);
    }
    public function CancellationRefundPolicy()
    {
        $data = $this->getElement();
        return view("HomePage.CancellationRefundPolicy", $data);
    }
    public function privacyPolicy()
    {
        $data = $this->getElement();
        return view("HomePage.privacyPolicy", $data);
    }
    // public function ourServicesPage(){
    // return view("HomePage.ourServicesPage");
    // }
    public function servicePages()
    {
        $data = $this->getElement();
        $ourServices = (new OurServicesModelController())->getOurServiceData();
        return view("HomePage.servicePages", $data, compact('ourServices'));
    }
    public function galleryPages()
    {
        $galleryItems = $this->getCachedGalleryItems();
        $elementData = $this->getElement();
        $data["galleryImages"] = $galleryItems;
        $data = array_merge($data, $elementData);
        return view("HomePage.galleryPages", $data);
    }
    public function contactUs()
    {
        $data = $this->getElement();
        return view("HomePage.contactUs", $data);
    }
    public function ComingSoon()
    {
        // $data = $this->getElement();
        return view("HomePage.ComingSoon");
    }
    public function event()
    {
        $data = $this->getElement();
        $getPackages = (new PackageMasterController())->getActivePackages();
        return view("HomePage.event", compact('getPackages'), $data);
    }
    // public function servicePages(){
    //     return view("HomePage.servicePages");
    // }
    public function tourpage()
    {
        $data = $this->getElement();
        $getPackages = (new PackageMasterController())->getActivePackages();
        $packageCategory = (new PackageCategoryController())->getActivePackagesCategoryData();
        $data = $this->getElement();
        $packages = PackageMaster::where(PackageMaster::STATUS, "1")->get();
        return view("HomePage.tourpage", compact('getPackages', 'packages', 'packageCategory'), $data);
    }
    public function tourDetailpage($slug)
    {
        $data = $this->getElement();
        $package = PackageMaster::where('slug', $slug)->firstOrFail();
        $getHomeAllFaq = HomeFaqModel::all();
        return view("HomePage.tourDetailpage", compact('package', 'getHomeAllFaq'), $data);
    }
    public function destinationpage()
    {
        $getPackages = (new PackageMasterController())->getActivePackages();
        $packageCategory = (new PackageCategoryController())->getActivePackagesCategoryData();
        $data = $this->getElement();
        $packages = PackageMaster::where(PackageMaster::STATUS, "1")->get();
        $destinations = PackageMaster::distinct()->pluck('package_country')->toArray();
        $homedestinations = DestinationsModel::where('status','1')->get();
        return view("HomePage.destinationpage", compact('destinations', 'packages', 'packageCategory', 'getPackages','homedestinations'), $data);
    }
    public function destinationDetailpage($destination_slug)
    {
        $data = $this->getElement();
        $homedestination = DestinationsModel::where('destination_slug', $destination_slug)->firstOrFail();
        // $destination = PackageMaster::where('destination_slug', $destination_slug)->firstOrFail();
        // $service = Service::where(Service::SERVICE_STATUS, Service::SERVICE_STATUS_LIVE)
        //     ->orderBy(Service::SERVICE_SORTING, 'desc')
        //     ->get();
        // $destinations = PackageMaster::distinct()->pluck('package_country')->toArray();
        // $package = PackageMaster::where(PackageMaster::STATUS, 1)
        //     ->where('package_country', $homedestination->destination_name)
        //     ->firstOrFail();
        $package = PackageMaster::where(PackageMaster::STATUS, "1")->get();
        $packages = PackageMaster::where(PackageMaster::STATUS, 1)
            ->where('package_country', $homedestination->destination_name)
            ->get();
            $homedestinations = DestinationsModel::where('status','1')->get();

        // $country = PackageMaster::select('package_country', 'package_image', 'package_name')
        //     ->where('status', 1)
        //     ->where('package_country', '!=', $homedestination->destination_name) 
        //     ->get();
        return view("HomePage.destinationDetailpage", compact('homedestination','packages','homedestinations'), $data);
    }
    public function blogpage()
    {
        $blogs = Blog::where(Blog::BLOG_STATUS, Blog::BLOG_STATUS_LIVE)
            ->orderBy(Blog::BLOG_SORTING, 'desc')
            ->get();
        $otherBlogs = Blog::where(Blog::BLOG_STATUS, Blog::BLOG_STATUS_LIVE)
            ->orderBy(Blog::BLOG_SORTING, 'desc')
            ->inRandomOrder()
            ->take(4)
            ->get();
        // $data = $this->getElement();
        $galleryItems = $this->getCachedGalleryItems(); // Ensure this returns a valid collection or query builder
        $galleryImages = $galleryItems->shuffle()->take(9); // Randomize and limit to 9 items

        // Prepare additional data for the view
        $data = $this->getElement();
        $data['galleryImages'] = $galleryImages;
        return view("HomePage.blogpage", $data, compact('otherBlogs', 'blogs'));
    }
    public function blogDetailpage($slug)
    {
        $blogs = Blog::where('slug', $slug)
            ->where(Blog::BLOG_STATUS, Blog::BLOG_STATUS_LIVE)
            ->firstOrFail();
        $otherBlogs = Blog::where('slug', '!=', $slug)
            ->where(Blog::BLOG_STATUS, Blog::BLOG_STATUS_LIVE)
            ->orderBy(Blog::BLOG_SORTING, 'desc')
            ->take(4)
            ->get();
        $galleryItems = $this->getCachedGalleryItems(); // Ensure this returns a valid collection or query builder
        $galleryImages = $galleryItems->shuffle()->take(9); // Randomize and limit to 9 items

        // Prepare additional data for the view
        $data = $this->getElement();
        $data['galleryImages'] = $galleryImages;
        return view("HomePage.blogDetailpage", $data, compact('blogs', 'otherBlogs'));
    }
    // public function filterPackages(Request $request)
    // {
        
    //     $data = $this->getElement();
        
    //     $destination = $request->input('destination');
    //     $category = $request->input('category'); 
        
    //     $query = PackageMaster::where(PackageMaster::STATUS, 1);
        
    //     if ($destination) {
    //         $query->where('package_country', 'LIKE', '%' . $destination . '%');
    //     }
        
    //     if ($category) {
    //         $query->where('package_type', 'LIKE', '%' . $category . '%');
    //     }
        
    //     $packages = $query->get();
        
    //     // \Log::info(\DB::getQueryLog());
        
    
    //     // $service = Service::where(Service::SERVICE_STATUS, Service::SERVICE_STATUS_LIVE)
    //     //     ->orderBy(Service::SERVICE_SORTING, 'desc')
    //     //     ->get();
        
    //     $destinations = PackageMaster::distinct()->pluck('package_country')->toArray();
    //     $categories = PackageMaster::distinct()->pluck('package_type')->toArray(); 
    //     // $categories = PackageMaster::distinct()->pluck('package_travel_category')->toArray(); 
        
    //     return view("HomePage.filteredList", $data, compact('packages', 'destinations','categories'));
    // }
    public function filterPackages(Request $request)
{
    // Fetch filters from the request
    $destination = $request->input('city'); // Destination filter
    $category = $request->input('activity'); // Package type filter

    // Query for packages
    $query = PackageMaster::where(PackageMaster::STATUS, 1);

    if (!empty($destination)) {
        $query->where(PackageMaster::PACKAGE_COUNTRY, 'LIKE', '%' . $destination . '%');
    }

    if (!empty($category)) {
        $query->where(PackageMaster::PACKAGE_TYPE, 'LIKE', '%' . $category . '%');
    }

    $packages = $query->get(); // Fetch the filtered packages

    // Get distinct destinations and categories for filters
    $destinations = PackageMaster::distinct()->pluck(PackageMaster::PACKAGE_COUNTRY)->toArray();
    $travelCategories = PackageMaster::distinct()->pluck(PackageMaster::PACKAGE_TYPE)->toArray();

    return view('HomePage.filteredList', compact('packages', 'destinations', 'travelCategories'));
}


    public function getMenu()
    {
        $menuItems = NavMenu::where([
            [NavMenu::STATUS, 1],
            [NavMenu::VIEW_IN_LIST, NavMenu::VIEW_IN_LIST_YES]
        ])
            ->select(
                NavMenu::TITLE,
                NavMenu::URL,
                NavMenu::URL_TARGET,
                NavMenu::PARENT_ID,
                NavMenu::NAV_TYPE,
                NavMenu::POSITION,
                NavMenu::ID
            )
            ->orderBy(NavMenu::PARENT_ID, "asc")
            ->orderBy(NavMenu::POSITION, "asc")->get();
        $returnData = [];
        if (count($menuItems)) {
            // Nav Menu By Type
            $menuItemTypes = collect($menuItems)->groupBy(NavMenu::NAV_TYPE)->toArray();

            foreach ($menuItemTypes as $navType => $val) {
                //for each type item
                foreach ($val as $item) {
                    if (!filter_var($item[NavMenu::URL], FILTER_VALIDATE_URL)) {
                        $item[NavMenu::URL] = url("") . "/" . $item[NavMenu::URL];
                        //dd(url("items"));
                    }
                    //parent id is null
                    if ($item[NavMenu::PARENT_ID] == null && !isset($returnData[$navType][$item[NavMenu::ID]])) {
                        $returnData[$navType][$item[NavMenu::ID]] = $item;
                    }
                    //if parent id is set i.e child node
                    if ($item[NavMenu::PARENT_ID]) {
                        $this->setChildren($returnData, $item);
                    }
                }
            }
            if (count($returnData)) {
                $return = [
                    "status" => true,
                    "message" => "menu items found.",
                    "data" => $returnData,
                    "menu_html" => $this->getHtml($returnData)
                ];
            } else {
                $return = ["status" => false, "message" => "menu items not found.", "data" => null];
            }
        } else {
            $return = ["status" => false, "message" => "menu items not set", "data" => null];
        }
        return response()->json($return);
    }

    public function setChildren(&$returnData, $item)
    {

        foreach ($returnData as $navType => $navItem) {
            //parent id matches             
            if ($navType == $item[NavMenu::NAV_TYPE] && !empty($navItem[$item[NavMenu::PARENT_ID]])) {
                $returnData[$item[NavMenu::NAV_TYPE]][$item[NavMenu::PARENT_ID]]["child_node"][] = $item;
                return true;
            }
            if (!empty($returnData[$item[NavMenu::NAV_TYPE]])) {

                $this->findSetChild($returnData[$item[NavMenu::NAV_TYPE]], $item);
            }

        }


    }

    /**
     * findSetChild
     *
     * @param  mixed $item
     * @param  mixed $itemSet
     * @return void
     */
    public function findSetChild(&$item, $itemSet)
    {
        try {
            foreach ($item as $navId => $navItem) {
                if ($navItem[NavMenu::ID] == $itemSet[NavMenu::PARENT_ID]) {
                    $item[$navId]["child_node"][] = $itemSet;
                    return true;
                }
                if (!empty($item[$navId]["child_node"])) {
                    return $this->findSetChild($item[$navId]["child_node"], $itemSet);
                }
            }
        } catch (Exception $exception) {
            return false;
        }
    }

    /**
     * getHtml
     *
     * @param  mixed $returnData
     * @return void
     */
    public function getHtml($returnData)
    {
        $html = [];
        foreach ($returnData as $key => $value) {
            if (!isset($html[$key])) {
                $html[$key] = '';
            }
            foreach ($value as $keyVal) {
                $html[$key] .= $this->getItemHTML($key, $html, $keyVal);
            }
            //$html[$key] = $this->getItemHTML($key,$html,$value);
        }
        return $html;
    }

    /**
     * getItemHTML
     *
     * @param  mixed $key
     * @param  mixed $html
     * @param  mixed $item
     * @return void
     */
    public function getItemHTML($key, $html, $item)
    {

        $link_html = "";
        if ($key == "top") {
            if (!empty($item["child_node"])) {

                $subMenu = $this->getItemChildHTML($item, '<div class="dropdown-menu">');
                $link_html .= '<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        ' . $item[NavMenu::TITLE] . '
                                    </a>' . $subMenu . '</div>
                                    </li>';
            } else {
                $link_html .= '<li class="nav-item">
                                    <a target="' . $item[NavMenu::URL_TARGET] . '" class="nav-link js-scroll-trigger" href="' .
                    $item[NavMenu::URL] . '">' . $item[NavMenu::TITLE] . '</a>
                               </li>';
            }
        }

        return $link_html;
    }

    /**
     * getItemChildHTML
     *
     * @param  mixed $item
     * @param  mixed $html
     * @return void
     */
    public function getItemChildHTML($item, $html)
    {
        if (!empty($item["child_node"])) {
            $html .= '<a target="' . $item[NavMenu::URL_TARGET] . '" class="dropdown-item" href="' . $item[NavMenu::URL] . '">' . $item[NavMenu::TITLE] . '</a>';
            foreach ($item["child_node"] as $item_new) {
                return $this->getItemChildHTML($item_new, $html);
            }
        } else {
            return $html .= '<a target="' . $item[NavMenu::URL_TARGET] . '" class="dropdown-item" href="' . $item[NavMenu::URL] . '">' . $item[NavMenu::TITLE] . '</a>';
        }
    }

    public function galleryPage()
    {
        $obj = new GalleryItem();
        $getAllGalleryImages = $obj->getAllGalleryImages();
        $getAllVideos = $obj->getAllGalleryVideos();
        return view("HomePage.galleryPage", compact("getAllGalleryImages", "getAllVideos"));
    }

    public function refreshCapthca()
    {
        try {
            $return = ["status" => true, "message" => "Success", "data" => Captcha::src()];

        } catch (Exception $exception) {
            $return = ["status" => false, "message" => $exception->getMessage(), "data" => $exception->getTraceAsString()];
        }
        return response()->json($return);
    }
    public function getElement()
    {
        $elements = $this->getWebSiteElements();
        $data = [];
        if (!empty($elements)) {
            foreach ($elements as $item) {
                $data[$item->{WebSiteElements::ELEMENT}] = $item->{WebSiteElements::ELEMENT_DETAILS};
            }
        }
        return $data;
    }
}
