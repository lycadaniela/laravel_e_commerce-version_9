<div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach (json_decode($products) as $product)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ $product->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('edit_product', $product->id)}}" class="btn btn-outline-primary">Edit</a>
                        
                            <form action="{{ route('destroy_product', $product->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
