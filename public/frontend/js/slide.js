document.addEventListener("DOMContentLoaded", () => {
    new Glide(".glide", {
        type: "carousel",
        startAt: 0,
        animationTimingFunc: "ease-in-out",
        gap: 100,
        perView: 3
    }).mount(); // flext all slide child slide and next child slide


    let prevBtn = document.getElementById("prev");
    let nextBtn = document.getElementById("next");
    let nextTren = document.getElementById("nextTren");


    let background = document.querySelector(".background");
    let indices = document.querySelectorAll(".index");

    let bgImgs = ["Indonesia.jpg", "Kerala.jpg", "Bali.jpg", "Thailand.jpg"];

    let currentIndex = 0;
    indices.forEach(index => index.classList.remove("active"));
    indices[currentIndex].classList.add("active");

    var myAnimation = new hoverEffect({
        parent: document.querySelector(".background"),
        intensity: 0.3,
        imagesRatio: 1080 / 1920,
        image1: `frontend/img/${bgImgs[0]}`,
        image2: `frontend/img/${bgImgs[1]}`,
        displacementImage: "frontend/img/14.jpg",
        hover: false
    });

    var myAnimation2 = new hoverEffect({
        parent: document.querySelector(".background"),
        intensity: 0.3,
        imagesRatio: 1080 / 1920,
        image1: `frontend/img/${bgImgs[1]}`,
        image2: `frontend/img/${bgImgs[2]}`,
        displacementImage: "frontend/img/14.jpg",
        hover: false
    });

    var myAnimation3 = new hoverEffect({
        parent: document.querySelector(".background"),
        intensity: 0.3,
        imagesRatio: 1080 / 1920,
        image1: `frontend/img/${bgImgs[2]}`,
        image2: `frontend/img/${bgImgs[3]}`,
        displacementImage: "frontend/img/14.jpg",
        hover: false
    });

    var myAnimation4 = new hoverEffect({
        parent: document.querySelector(".background"),
        intensity: 0.3,
        imagesRatio: 1080 / 1920,
        image1: `frontend/img/${bgImgs[3]}`,
        image2: `frontend/img/${bgImgs[0]}`,
        displacementImage: "frontend/img/14.jpg",
        hover: false
    });

    let distortAnimations = [
        myAnimation,
        myAnimation2,
        myAnimation3,
        myAnimation4
    ];

    function startNextDistortAnimation() {
        let prevIndex = currentIndex;
        currentIndex = (currentIndex + 1) % 4;
        indices.forEach(index => index.classList.remove("active"));
        indices[currentIndex].classList.add("active");
        distortAnimations[prevIndex].next();
        showTextAnimation("next");
        setTimeout(() => {
            let canvas = background.querySelectorAll("canvas");
            background.appendChild(canvas[0]);
            distortAnimations[prevIndex].previous(); // anim next
        }, 1200);
    }

    function startPrevDistortAnimation() {
        currentIndex = currentIndex - 1 < 0 ? 3 : currentIndex - 1;
        indices.forEach(index => index.classList.remove("active"));
        indices[currentIndex].classList.add("active");
        distortAnimations[currentIndex].next();
        showTextAnimation("prev");
        setTimeout(() => {
            let canvas = background.querySelectorAll("canvas");
            background.insertBefore(canvas[canvas.length - 1], background.firstChild);
            distortAnimations[currentIndex].previous();
        }, 200);
    }

    var thoigian = setInterval(function () {

        // startNextDistortAnimation();
        nextBtn.click();
        // auto click button
    }, 2000);


    nextBtn.addEventListener("click", () => {
        startNextDistortAnimation();
        // clearInterval(thoigian);
    });

    nextTren.addEventListener("click", () => {
        startNextDistortAnimation();
        clearInterval(thoigian);
    });


    prevBtn.addEventListener("click", () => {
        startPrevDistortAnimation();
        clearInterval(thoigian);
    });


    let titleDisplacement = 0;
    let descriptionDisplacement = 0;


    function showTextAnimation(direction) {

        // dich chuyen title slide
        if (titleDisplacement === 0 && direction === "prev") {
            titleDisplacement = -390;
        } else if (titleDisplacement === -390 && direction === "next") {
            titleDisplacement = 0;
        } else {
            titleDisplacement =
                direction === "next"
                    ? titleDisplacement - 130
                    : titleDisplacement + 130;
        }

        //dich chuyen content slide
        if (descriptionDisplacement === 0 && direction === "prev") {
            descriptionDisplacement = -165;
        } else if (descriptionDisplacement === -165 && direction === "next") {
            descriptionDisplacement = 0;
        } else {
            descriptionDisplacement =
                direction === "next"
                    ? descriptionDisplacement - 55
                    : descriptionDisplacement + 55;
        }

        let title = document.querySelectorAll("#title h4");
        let description = document.querySelectorAll("#description p");


        //--------- next title slide ------------
        title.forEach(title => {
            TweenMax.to(title, 1, {
                top: `${titleDisplacement}px`,
                ease: Strong.easeInOut
            });
        });

        description.forEach((description, index) => {
            let opacity = 0;
            if (index === currentIndex) {
                opacity = 1;
            } else {
                opacity = 0;
            }
            TweenMax.to(description, 1, {
                top: `${descriptionDisplacement}px`,
                ease: Strong.easeInOut,
                opacity: opacity
            });
        })
    }


})
