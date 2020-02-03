@include('qaz.header')

    <div class="container ">

        
            <form class="form-horizontal" method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                @csrf

                <input  type="text" class="form-control @error('name') is-invalid @enderror"   placeholder="Маникюр" value="" name="name">
                    @error('name')
                        <strong>{{ $message }}</strong>
                    @enderror

                <input  type="file" class="form-control @error('price') is-invalid @enderror" placeholder="123" name="price">
                    @error('price')
                        <strong>{{ $message }}</strong>
                    @enderror

                <input  type="number" class="form-control @error('sale') is-invalid @enderror"   placeholder="123" name="sale">
                    @error('sale')
                        <strong>{{ $message }}</strong>
                    @enderror
                {{-- ................ здесь можно продолжить INPUT  --}}
            </form>

</div>

@include('qaz.footer')