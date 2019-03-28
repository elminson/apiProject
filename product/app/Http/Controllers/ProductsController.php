<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Validator;
use \Illuminate\Database\Eloquent\ModelNotFoundException;


class ProductsController extends Controller
{
    protected $pagination;

    public function __construct()
    {
        $this->pagination = config('app.pagination');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $pagination = $request->input('per_page') ? $request->input('per_page') : $this->pagination;
        return response()->json(Product::paginate($pagination), 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function searchExact(Request $request, $name)
    {

        if (empty($name) || $name === '' || $request->input('name') === '') {
            return response()->json('name is required!', 400);
        }

        $pagination = $request->input('per_page') ? $request->input('per_page') : $this->pagination;
        $product = Product::where('name', $name)->paginate($pagination);

        if (!$product || count($product) == 0) {
            return response()->json([
                'code' => 404,
                'message' => 'Record not found!',
            ], 404);
        }
        return response()->json($product, 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function search(Request $request, $name)
    {

        if (empty($name) || $name === '' || $request->input('name') === '') {
            return response()->json('name is required!', 400);
        }

        $pagination = $request->input('per_page') ? $request->input('per_page') : $this->pagination;

        $product = Product::where('name', 'like', '%' . $name . '%')->paginate($pagination);

        if (!$product || count($product) == 0) {
            return response()->json([
                'code' => 404,
                'message' => 'Record not found!',
            ], 404);
        }
        return response()->json($product, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:100',
            'price' => "required|regex:/^\d*(\.\d{1,2})?$/",
        ];
        $requestData = $request->all();

        $validator = Validator::make($requestData, $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $requestData['price'] = $this->convertPrice($requestData['price']);
        $product = Product::create($requestData);
        $response['product'] = $product;
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'code' => 404,
                'message' => 'Record not found!',
            ], 404);
        }

        $response['product'] = $product;
        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'code' => 404,
                'message' => 'Record not found!',
            ], 404);
        }

        $rules = [
            'name' => 'required|max:100',
            'price' => "required|regex:/^\d*(\.\d{1,2})?$/",
        ];
        $requestData = $request->all();

        $validator = Validator::make($requestData, $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $requestData['price'] = $this->convertPrice($requestData['price']);
        $product->update($requestData);
        $response['product'] = $product;
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    /**
     * @param Request $request
     * @param Product $product
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function delete($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'code' => 404,
                'message' => 'Record not found!',
            ], 404);
        }

        $product->delete();
        return response()->json([], 204);
    }


    /**
     * @param $value
     * @return string
     */
    private function convertPrice($value)
    {
        return money_format('%i', $value);
    }
}
