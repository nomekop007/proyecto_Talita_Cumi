@extends('index')

@section('header')
    <header style="height: 100%;min-height: 30rem;padding-bottom: 0" class="masthead ">
        <div class="container ">
            <div class="row h-100 align-items-center justify-content-center text-center wow bounceInRight">
                <div class="col-lg-12 align-self-end ">
                    <h1 style="padding-top: 150px;font-family: 'Parisienne', cursive;font-size: 6.5vw;color: white"><b>Historias de la Academia</b></h1>
                </div>

            </div>
        </div>
    </header>
@endsection

@section('contenido')


    <div class="container">

        <ul class="timeline">
            <li>
                <div class="timeline-badge primary">2002</div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                    </div>
                    <div class="timeline-body">
                        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>



@endsection()