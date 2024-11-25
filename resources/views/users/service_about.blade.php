
    <!-- services section start -->
    {{-- <section class="services-area pt-120">
        <div class="container">
            <div class="services-wrapper">
                <div class="title-wrapper">
                    <h2 class="text-center">Nos services:</h2>
                    <p class="text-center">TCA est pour tout le monde. Une plateforme digitale concu pour battir un meilleur avenir</p>
                </div>
                <div class="row">
                    @foreach ($tontine as $tontines)
                        <div class="col-md-6 col-lg-6">
                            <div class="services-single-item text-center">
                                <img src="{{ Storage::url($tontines->image) }}" alt="Trade Now">
                                <h3 class="text-center">
                                    {{ $tontines->name }}
                                </h3>
                                <p class="text-center">{{ $tontines->description }}</p>
                                <a href="{{  route('user.tontines') }}" class="secondary-btn secondary-effect">Voir</a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section> --}}
    <!-- services section end -->

    <!-- about crikto section start -->
    @include('users.apropos')
    <!-- about crikto section end -->
