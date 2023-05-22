<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CropController extends Controller
{
    public function TestimonialCropImage(Request $request)
    {
        $image = $request->file('image');
        $imageName = time() . $image->getClientOriginalName();
        $imageExtention = $image->extension();
        $fullImageName = $imageName . "." . $imageExtention;
        $imagePath = $image->storeAs("public/AdminPanel/assets/Testimonial", $fullImageName);

        if ($imagePath) {
            return response()->json([
                'status' => 1,
                'msg' => $fullImageName
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'msg' => 'Error storing image'
            ]);
        }
    }

    public function ServiceCropImage(Request $request)
    {
        $image = $request->file('image');
        $imageName = time() . $image->getClientOriginalName();
        $imageExtention = $image->extension();
        $fullImageName = $imageName . "." . $imageExtention;
        $imagePath = $image->storeAs("public/AdminPanel/assets/Service", $fullImageName);

        if ($imagePath) {
            return response()->json([
                'status' => 1,
                'msg' => $fullImageName
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'msg' => 'Error storing image'
            ]);
        }
    }

    public function PortfolioCropImage(Request $request)
    {
        $image = $request->file('featureImage');
        $imageName = time() . $image->getClientOriginalName();
        $imageExtention = $image->extension();
        $fullImageName = $imageName . "." . $imageExtention;
        $imagePath = $image->storeAs("public/AdminPanel/assets/Portfolio", $fullImageName);

        if ($imagePath) {
            return response()->json([
                'status' => 1,
                'msg' => $fullImageName
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'msg' => 'Error storing image'
            ]);
        }
    }

    public function aboutCropImage(Request $request)
    {
        $image = $request->file('image');
        $imageName = time() . $image->getClientOriginalName();
        $imageExtention = $image->extension();
        $fullImageName = $imageName . "." . $imageExtention;
        $imagePath = $image->storeAs("public/AdminPanel/assets/About", $fullImageName);

        if ($imagePath) {
            return response()->json([
                'status' => 1,
                'msg' => $fullImageName
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'msg' => 'Error storing image'
            ]);
        }
    }
}
