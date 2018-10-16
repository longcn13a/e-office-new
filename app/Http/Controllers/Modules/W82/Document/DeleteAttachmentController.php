<?php

namespace App\Http\Controllers\Modules\W82\Document;

use App\Eoffice\Helper;
use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class  DeleteAttachmentController extends Controller
{
    public function index(Request $request, $documentID,$fileName)
    {
        try {
            $decodedPath = base64_decode($fileName);
            $document = Document::find($documentID);
            $attachedFilesArray = json_decode($document->AttachedFiles,true);


            if (($key = array_search($decodedPath, $attachedFilesArray)) !== false) {
                unset($attachedFilesArray[$key]);
            }
            $document->AttachedFiles = json_encode($attachedFilesArray);
            \Debugbar::info(json_encode($attachedFilesArray));

            $document->save();
            if (file_exists(public_path().'\users-upload\\'.$decodedPath)) {
                unlink(public_path().'\users-upload\\'.$decodedPath);
            }

            Helper::setSession('successMessage',"Xóa file đính kèm thành công");
        } catch (\Exception $exception) {
            Helper::setSession('errorMessage',$exception->getMessage());
        }

        return redirect("/bi/document/edit?documentID=$documentID");
    }
}