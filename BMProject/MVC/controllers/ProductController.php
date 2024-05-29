
<?php
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class ProductModel extends Model
{
    protected $table = 'products'; // Replace 'products' with your actual table name
    // Rest of the model code...
}
class ProductController extends Controllers
{
    public $productModel;
    public function __construct()
    {
        $this->productModel = $this->model("ProductModel");
    }
    function displayIntroduction(){
        $this->view("master",["Page" => "home"]);
    }
    function editProduct($pid){
        $product = ProductModel::where('pid',$pid)->first();
        return view('admin/product/updateProduct', ['product' => $product]);
    }
    function updateProduct(Request $request, $pid){
        $product = ProductModel::where('pid', $pid)->first();
        $product->pid = $request->pid;
        $product->pname = $request->pname;
        $product->company = $request->company;
        $product->band = $request->selectBand;
        $product->year = $request->selectYear;
        if (isset($_FILES['imageFile']) && $_FILES['imageFile']['error'] === UPLOAD_ERR_OK){
            $pimage = 'data:image/png;base64,'
            . base64_encode(file_get_contents($_FILES['imageFile']['tmp_name']));
            $product->pimage = $pimage;
        
        }
        $product->save();
        return redirect('admin/product/updateProduct/' . $pid)
        ->with("Note", "Sua thanh cong");
    }
    function deleteProducts($pid){
        $product = ProductModel::where('pid',$pid)->first();
        $product->delete();
        return redirect('admin/product/getProducts')
        ->with("Note", "Xoa thanh cong!");;
    }
}
?>