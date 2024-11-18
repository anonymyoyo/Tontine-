<!-- Mirrored from www.bootstrapget.com/demos/templatemonster/unity-bootstrap-commercial-dashboard/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 22:12:11 GMT -->
@include('../commercial.head')

  <body>
    <!-- Page wrapper start -->
    <div class="page-wrapper">

      <!-- App header starts -->
      @include('../commercial.header')

      <!-- App header ends -->

      <!-- Main container start -->
      <div class="main-container">

        <!-- Sidebar wrapper start -->
        @include('../commercial.sidebar')
        <!-- Sidebar wrapper end -->

        <!-- App container starts -->
        <div class="app-container">

          <!-- App hero header starts -->
          <div class="app-hero-header mb-4">

            <!-- Breadcrumb and Stats start -->
            <div class="d-flex align-items-center mb-3">

              <!-- Breadcrumb start -->
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <i class="bi bi-house lh-1"></i>
                  <a href="index.html" class="text-decoration-none">Ajouter</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Client</li>
              </ol>
              <!-- Breadcrumb end -->

              <!-- Sales stats start -->
              <div class="ms-auto d-lg-flex d-none flex-row">
                <div class="d-flex flex-row gap-1">
                  <button class="btn btn-sm btn-dark">Today</button>
                  <button class="btn btn-sm btn-dark btn-transparent">
                    7 Days
                  </button>
                  <button class="btn btn-sm btn-dark btn-transparent">
                    15 Days
                  </button>
                  <button class="btn btn-sm btn-dark btn-transparent">
                    30 Days
                  </button>
                  <button class="btn btn-sm btn-dark btn-transparent">
                    90 Days
                  </button>
                </div>
              </div>

              <!-- Sales stats end -->

            </div>
            <!-- Breadcrumb and stats end -->

          </div>
          <!-- App Hero header ends -->
<style>
    .menu{
        align-self: center;
    }
    section{
        width: 45%;
        background-color: #90cf37;
        margin-left: auto;
        margin-right: auto;
        border-radius: 20px;
        /* display: center; */
    }

    img{
        width: 150px;
        height: 150px;
        align-items: center;
    }
    .menu section{
        display: inline-block;
        align-items: center;

    }
    .depot .p{
        text-align: center;
        width: 50%;
        size: 30;
        margin-left: 50px;
    }
    .retrait .p{
        text-align: center;
        width: 50%;
        size: 30px;
    }
    h1, .button{
        background: aliceblue;
        text-align: center;
        color: black;
        margin: 50px;
    }
    .button{
        border-radius: 25px;
        width: 150px;
        height: 80px;
        font-size: 20px;
        margin-right: 50px;
        background-color: black;
        color: aliceblue;
    }
    .button:hover{
        background-color: white;
        color: black;
        transition: .5s;
    }
    /* a{} */
</style>
<div class="menu">
    <main>
        <section class="item">
            <article>
                <h1>DEPOT</h1>
                <div class="p">
                    <div class="depot">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Bitcoin">
                        <label class="primary text-center">Tontine</label>
                        <select name="montant" required class="form-control text-center">
                            <option value="">Selectionner Tontine</option>
                            @foreach ($membres as $membre)
                            @foreach ($t as $tontines)
                            @if ($membre->mem_tontine_id == $tontines->id)
                                <option value="{{ $tontines->id }}">{{ $tontines->name }}</option>
                            @endif
                            @endforeach
                            @endforeach
                        </select>
                        <div class="submit-time">
                            <input class="form-control text-center" required min="500" type="number" name="" placeholder="Montant a deposer : Min 500 XAF">
                        </div>
                    </div>
                </div>
                <a href="{{ route('depot.commercial') }}" class="primary-btn primary-effect"><button class="button">Deposer</button></a>
            </article>
        </section>
    </main>
</div>



</div>
<!-- App container ends -->

</div>
<!-- Main container end -->

</div>
<!-- Page wrapper end -->
@include('../commercial.script')
