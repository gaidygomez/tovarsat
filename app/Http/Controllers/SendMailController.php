<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

use App\Mail\Notification;
use App\Mail\CustomSupp;
use App\Mail\InternetService;
use App\Mail\CoorporateService;

use App\Http\Requests\FormSendEmailRequest;
use App\Http\Requests\CustomSuppRequest;
use App\Http\Requests\InterServiceRequest;
use App\Http\Requests\CoorporateServiceRequest;

class SendMailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inicio');
    }

    public function store(FormSendEmailRequest $request)
    {
        if ($request['g-recaptcha-response']!= null) {
            if ($request['office'] == "Mérida") {
                Mail::to('atcmerida@tovarsat.com.ve')->send(new Notification($request));

                return back()
                        ->with('success1', 'Su mensaje ha sido enviado.');
                }
            elseif ($request['office']== "Tovar") {
                Mail::to('atctovar@tovarsat.com.ve')->send(new Notification($request));

                return back()
                        ->with('success1', 'Su mensaje ha sido enviado.');
            } else {
                Mail::to('atcejido@tovarsat.com.ve')->send(new Notification($request));

                return back()
                        ->with('success1', 'Su mensaje ha sido enviado.');
                    }
        } else {
            return back()
                    ->with('alert1', 'Su mensaje no ha sido enviado por no completar el captcha');
        }
    }

    public function customsupp (CustomSuppRequest $request)
    {
        if ($request['g-recaptcha-response']!= null) {
            if ($request['foffice'] == "Mérida") {

                Mail::to('atcmerida@tovarsat.com.ve')->send(new CustomSupp($request));

                return back()
                    ->with('success', 'Su mensaje ha sido enviado.');
            }
            elseif ($request['foffice']== "Tovar") {
                Mail::to('atctovar@tovarsat.com.ve')->send(new CustomSupp($request));

                return back()
                    ->with('success', 'Su mensaje ha sido enviado.');
            }
            else{
                Mail::to('atcejido@tovarsat.com.ve')->send(new CustomSupp($request));

                return back()
                    ->with('success', 'Su mensaje ha sido enviado.');
            }
        }else{
            return back()
                    ->with('alert', 'Su mensaje no ha sido enviado por no completar el captcha');
        }
    }

    public function inter (InterServiceRequest $request)
    {
        if ($request['g-recaptcha-response']!= null) {
            if ($request['inter_office'] == "Mérida") {

                Mail::to('atcmerida@tovarsat.com.ve')->send(new InternetService($request));

                return back()
                        ->with('success2', 'Su mensaje ha sido enviado.');
                    }
            elseif ($request['inter_office']== "Tovar") {
                Mail::to('atctovar@tovarsat.com.ve')->send(new InternetService($request));

                return back()
                        ->with('success2', 'Su mensaje ha sido enviado.');
            }
            else{
                Mail::to('atcejido@tovarsat.com.ve')->send(new InternetService($request));

                return back()
                        ->with('success2', 'Su mensaje ha sido enviado.');
            }
        } else {
            return back()
                    ->with('alert2', 'Su mensaje no ha sido enviado por no completar el captcha');
        }

    }

    public function coor(CoorporateServiceRequest $request)
    {
        if ($request['g-recaptcha-response']!= null) {
            Mail::to('coorporativo@tovarsat.com.ve')->send(new CoorporateService($request));

            return back()
                    ->with('success3', 'Su mensaje ha sido enviado.');
        } else {
            return back()
                    ->with('alert3', 'Su mensaje no ha sido enviado por no completar el captcha');
        }
    }
}
