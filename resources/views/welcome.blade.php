<x-app-layout>
    <style>
        #box {
            margin: 0 auto 20px auto;
            max-width: 758px;
            box-shadow: 0 1px 4px #ccc;
            border-radius: 2px;
            padding: 10px 30px 5px;
            background: #fff;
            text-align: center;
        }
    </style>
    <section id="box">
        <h1>Paste the URL to be shortened</h1>
        <form action="{{route('generate.shorten.link.post')}}" method="POST">
            @csrf
            @method('POST')
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter the link here" name="origin_url">
                <div class="input-group-append">
                    <button class="btn btn-main" >Shorten URL</button>
                </div>
            </div>
        </form>
        
    </section>
</x-app-layout>
