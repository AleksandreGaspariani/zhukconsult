<footer class="footer d-flex justify-content-center align-items-center">
    <p class="m-0 p-0">
            {!! $footer = session()->get('footer') !!}
    </p>
    @auth()
        <a href="{{route('edit_footer')}}" class="ms-3">
            <i class="bi bi-pencil-square text-white" data-toggle="tooltip" data-placement="right" title="Edit Footer"></i>
        </a>
    @endauth
</footer>

<div>
    <a href="#" id="backtotop" style="z-index: 10;position: fixed; bottom: 4%; right: 2%;" class="d-none">
        <i class="bi bi-arrow-bar-up text-info p-2 bg-info text-white border rounded"></i>
    </a>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="{{asset('scripts/script.js')}}"></script>

<!--  -->
</body>
</html>
