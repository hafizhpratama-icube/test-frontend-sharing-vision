<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Http;

class ApiController extends BaseController
{
    public function apiAllPosts()
    {
        $url = $this->url() . "/api/article";
        $token = $this->token();

        $response = Http::withHeaders([
            'Authorization' => "Bearer " . $token['data']['token']
        ])->get($url);

        return view('allposts', compact('response'));
    }

    public function apiEditPosts($id)
    {
        $url = $this->url() . "/api/article/" . $id;
        $token = $this->token();

        $response = Http::withHeaders([
            'Authorization' => "Bearer " . $token['data']['token']
        ])->get($url);

        return view('editposts', compact('response'));
    }

    public function apiPostsEdit($id, Request $request)
    {
        $url = $this->url() . "/api/article/" . $id;
        $token = $this->token();

        $myBody['title'] = $request->post('title');
        $myBody['category'] = $request->post('category');
        $myBody['content'] = $request->post("content");
        $myBody['status'] = $request->post("status");

        $data_string = json_encode($myBody);

        $responsePut = Http::withHeaders([
            'Authorization' => "Bearer " . $token['data']['token'],
            'Content-Type' => 'application/json',
            'Content-Length' => strlen($data_string)
        ])->put($url, $myBody);

        $url = $this->url() . "/api/article";

        $response = Http::withHeaders([
            'Authorization' => "Bearer " . $token['data']['token']
        ])->get($url);

        $status = $responsePut['success'];

        return view('allposts', compact('response'))->with(
            'success',
            $responsePut
        );
    }

    public function apiDelete($id)
    {
        $url = $this->url() . "/api/article/" . $id;
        $token = $this->token();

        $responsePut = Http::withHeaders([
            'Authorization' => "Bearer " . $token['data']['token'],
            'Content-Type' => 'application/json'
        ])->delete($url);

        $url = $this->url() . "/api/article";

        $response = Http::withHeaders([
            'Authorization' => "Bearer " . $token['data']['token']
        ])->get($url);

        return view('allposts', compact('response'))->with(
            'success',
            $responsePut
        );
    }

    public function apiPosts(Request $request)
    {
        $url = $this->url() . "/api/article";
        $token = $this->token();

        $myBody['title'] = $request->post('title');
        $myBody['category'] = $request->post('category');
        $myBody['content'] = $request->post("content");
        $myBody['status'] = $request->post("status");

        $data_string = json_encode($myBody);

        $responsePut = Http::withHeaders([
            'Authorization' => "Bearer " . $token['data']['token'],
            'Content-Type' => 'application/json',
            'Content-Length' => strlen($data_string)
        ])->post($url, $myBody);

        $url = $this->url() . "/api/article";

        $response = Http::withHeaders([
            'Authorization' => "Bearer " . $token['data']['token']
        ])->get($url);

        return view('allposts', compact('response'))->with(
            'success',
            $responsePut
        );
    }

    public function apiPreview()
    {
        $url = $this->url() . "/api/article";
        $token = $this->token();

        $response = Http::withHeaders([
            'Authorization' => "Bearer " . $token['data']['token']
        ])->get($url);

        return view('previewposts', compact('response'));
    }

    public function token()
    {
        $url = $this->url() . "/api/login";
        $myBody['email'] = "admin@gmail.com";
        $myBody['password'] = "admin";

        $data_string = json_encode($myBody);

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Content-Length' => strlen($data_string)
        ])->post($url, $myBody);

        return $response;
    }

    public function url()
    {
        return "http://127.0.0.1:8088";
    }
}
