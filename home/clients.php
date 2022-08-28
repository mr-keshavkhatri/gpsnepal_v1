<div class="container text-center" id="client">
    <h2 class="font-weight-light hm-title">Our Valuable Clients</h2>
    <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item slider">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/client/nabil.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slider">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/client/ntc.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slider active">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/client/huawei.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slider">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/client/nepal_police.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slider">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/client/NDI.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slider">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/client/nagarik.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</div>

<script>
    let items = document.querySelectorAll('.carousel .slider')

    items.forEach((el) => {
        const minPerSlide = 4
        let next = el.nextElementSibling
        for (var i = 1; i < minPerSlide; i++) {
            if (!next) {
                // wrap carousel by using first child
                next = items[0]
            }
            let cloneChild = next.cloneNode(true)
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
        }
    })
</script>