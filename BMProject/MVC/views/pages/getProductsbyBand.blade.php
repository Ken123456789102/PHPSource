<form method="get" action="{{ route('admin.product.getProductsbyBand')}}">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="mb-3">
        <label for="" class="form-label">Select Band</label>
        <select class="form-select form-select-lg" name="selectBand" id="">
            <option value="Minocin">Minocin</option>
            <option value="Aerogreen Antibac">Aerogreen Antibac</option>
            <option value="Bodycology">Bodycology</option>
            <option value="ibuprofen">ibuprofen</option>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary" name="btSearch">
            Submit
        </button>
    </div>
    <table>
        <tbody>
            <thead>
                <tr>
                    <th class=\"text-center\">PID</th>
                    <th class=\"text-center\">Name</th>
                    <th class=\"text-center\">Company</th>
                    <th class=\"text-center\">Year</th>
                    <th class=\"text-center\">band</th>
                    <th class=\"text-center\">Image</th>
                    <th class=\"text-center\">Edit</th>
                    <th class=\"text-center\">Delete</th>
                </tr>
            </thead>
            <tr>
            @foreach ($collection as $item)
                <td class=\"text-left\">{{$product->pid}}</td>
                <td class=\"text-left\">{{$product->pname}}</td>
                <td class=\"text-left\">{{$product->company}}</td>
                <td class=\"text-left\">{{$product->year}}</td>
                <td class=\"text-left\">{{$product->band}}</td>
                <td class=\"text-left\"><img src="{{$product->pimage}}" alt="Image"></td>
                <td class="center"><i class="fa fa-trash-o fa-fw"></i>
                    <a href="deleteProduct/{{$product->pid}}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i>
                    <a href="updateProduct/{{$product->pid}}"> Edit</a></td>
            </tr>
            @endforeach
            @foreach ($products as $products)
            <tr>
                <td class=\"text-left\">{{$product->pid}}</td>
                <td class=\"text-left\">{{$product->pname}}</td>
                <td class=\"text-left\">{{$product->company}}</td>
                <td class=\"text-left\">{{$product->year}}</td>
                <td class=\"text-left\">{{$product->band}}</td>
                <td class=\"text-left\"><img src="{{$product->pimage}}" alt="Image"></td>
                <td class="center"><i class="fa fa-trash-o fa-fw"></i>
                    <a href="deleteProduct/{{$product->pid}}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i>
                    <a href="updateProduct/{{$product->pid}}"> Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</form>