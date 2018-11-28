@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="blue">
                    <h4 class="title">{{ $title }}</h4>
                </div>
                <div class="card-content table-responsive">
                    @include('message.message')
                    <!--dd($data_reportes)-->
                    
                    <?php $text = 0; ?>  
                    @foreach($data_reportes as $reportes)
                        @if ($text == 0)
                            <div class="card-header" data-background-color="grey">
                                <h6 class="title">Indices</h6>
                            </div>
                        @elseif ($text == 1)
                            <div class="card-header" data-background-color="grey">
                                <h6 class="title">Indicadores</h6>
                            </div>
                        @elseif ($text == 2)
                            <div class="card-header" data-background-color="grey">
                                <h6 class="title">Paginas</h6>
                            </div>
                        @elseif ($text == 3)
                            <div class="card-header" data-background-color="grey">
                                <h6 class="title">Dimesiónes</h6>
                            </div>
                        @elseif ($text == 4)
                            <div class="card-header" data-background-color="grey">
                                <h6 class="title">Propiedades</h6>
                            </div>
                        @endif
                        <br>
                        <?php $text +=1;  ?> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection