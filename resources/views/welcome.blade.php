@extends('layouts/page')

@section('content')

            
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAflBMVEUXGR6v5hRuvgC07RMAAB8WFx4TEh4TDx4NCR4SDB+x6RSYxxY4XBhVbRtxxABAaRULAB9lrgmHywohLx1BUxwuRhorNR2g0haBwwtVkBALAx5hfRul2RU1VRlDYhlXcRuL0gm69BM7YRZvnRU9TRwpQhpdfhh0yQBYlg8eKB1QWKgOAAABM0lEQVR4nO3cWU7DMBiF0UAmCFNahlJahgJl2P8GYQXOw1/ZqXTOCvxJebqKXVUAAAAAAAAAAAAAAAAAAADAIXR9yFlImyPw+TLi5Sritc2QOC6uI97qiF2XpfA0YjmcBNQKFSpUqFChQoUKFSpUqFChQoUKFSpUqFChQoUKFSpUqFChQoUKFSpUeOjC0F9fR1DYv99EfMy/sOrPA5pNPf/CkCeFChUWp1ChwvIUKlRYnkKFCstTqDBL4cQt2S5p3NRDQJbC7vMu6T5p/3URscpxS7bZpi+yLpNz6fe6CcnxkTar5OI5PKY37/WY4YwxChUqLE+hQoXlKVSosDyFChWWp1DhERRud8kX1SaWqJ/5F7YPabdpv7Mfrf8T05tvO6H08QEAAAAAAAAAAAAAAAAK+wPxdHVYpuRM4AAAAABJRU5ErkJggg==">

                    <div>
                        <p>Hello, Dave and welcome to OWASP top 10 vulnerabilities database!</p>
                        <h1><a href="{{ route('vulnerabilities') }}">Click here to take a look!</a></h1>
                    </div>
                </div>
@endsection