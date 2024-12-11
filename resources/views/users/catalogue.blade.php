@include('users.head')

<body>

    <!-- header start -->
    @include('users.header')
    <!-- header end -->

</body>
    <div class="banniere">
        <img src="{{ asset('assets/css/img/1.PNG') }}" alt="banniere">
    </div><br><br>
        <div class="separator"></div><br>
    <h1>NOS PRODUITS</h1>
    <div class="body">
        <div class="body_grid">

            <div class="grid_product">
                <div class="product">
                    <img src="{{ asset('assets/css/img/VF-features.png') }}" class="product_img" alt="image du produit">
                    <p class="nomproduit">Nom du produit <br>
                        <span class="prix">en cash :20 000 XAF</span><br><span class="prix">en tontine :23 000 XAF</span>
                    </p>
                </div>
                <div class="product">
                    <img src="{{ asset('assets/css/img/VF-features.png') }}" class="product_img" alt="image du produit">
                    <p class="nomproduit">Nom du produit <br>
                        <span class="prix">en cash :20 000 XAF</span><br><span class="prix">en tontine :23 000 XAF</span>
                    </p>
                </div>
                <div class="product">
                    <img src="{{ asset('assets/css/img/VF-features.png') }}" class="product_img" alt="image du produit">
                    <p class="nomproduit">Nom du produit <br>
                        <span class="prix">en cash :20 000 XAF</span><br><span class="prix">en tontine :23 000 XAF</span>
                    </p>
                </div>
                <div class="product">
                    <img src="{{ asset('assets/css/img/VF-features.png') }}" class="product_img" alt="image du produit">
                    <p class="nomproduit">Nom du produit <br>
                        <span class="prix">en cash :20 000 XAF</span><br><span class="prix">en tontine :23 000 XAF</span>
                    </p>
                </div>
                <div class="product">
                    <img src="{{ asset('assets/css/img/VF-features.png') }}" class="product_img" alt="image du produit">
                    <p class="nomproduit">Nom du produit <br>
                        <span class="prix">en cash :20 000 XAF</span><br><span class="prix">en tontine :23 000 XAF</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="separator_vertical"></div>
        <div class="nav_grid">
            <h3>Categories</h3>
            <div class="category_grid">
                <nav>
                <ul>
                    <li>Category 1</li>
                    <li>Category 1</li>
                    <li>Category 1</li>
                    <li>Category 1</li>
                    <li>Category 1</li>
                    <li>Category 1</li>
                    <li>Category 1</li>
                    <li>Category 1</li>
                </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- subscribe newsletter section start -->
    @include('users.newsletter_footer')
    <!-- footer end -->
<!-- Mirrored from pixner.net/crikto/crikto/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 16:15:53 GMT -->
</html>
