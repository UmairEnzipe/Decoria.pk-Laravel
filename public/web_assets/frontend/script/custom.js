/* slick slider  */


try {
    $('.gallery_slider').slick({
        infinite: true,
        dots: true,

    });


    $('.services_slider').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });



    $('.plot-detail-div').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.plot-detail-slider'
    });
    $('.plot-detail-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.plot-detail-div',
        centerMode: true,
        focusOnSelect: true
    });
} catch (e) {
    console.log("slick file not added");
}



/* Portfolio filters */
// var filterBtn = document.querySelector();
var filterBtn = document.querySelectorAll('#filterBy');

var msgDiv = document.getElementById('msgDiv');

msgDiv && (msgDiv.style.display = 'none');





/* hide or show portfolio data by filter key */
function hideAllChildrenButOne(toRevealId) {
    var parentId = document.querySelector('#portfolio_section');
    var children = parentId.children;


    if (toRevealId == 'all') {

        for (var i = 0; i < children.length; i++) children[i].style.display = "block";

    } else {

        /* first hide all children  */
        for (var i = 0; i < children.length; i++) children[i].style.display = "none";

        /* than unhide select children */
        var revealList = document.querySelectorAll("." + toRevealId);

        /* if not data found */
        if (revealList.length < 1) {
            document.getElementById('msgDiv').style.display = 'block';
        } else {
            /* if data found show by filter */
            revealList.forEach(e => {
                e.style.display = 'block';
            })
            document.getElementById('msgDiv').style.display = 'none';

        }
    }
}
/* filter function for portfolio page */

try {
    filterBtn.forEach(e => {
        e.addEventListener('click', () => {
            document.querySelectorAll('.plot-btn').forEach(e => {
                e.classList.remove('active-plot-btn')
            })
            var toRevealId = e.dataset.filterby;
            hideAllChildrenButOne(toRevealId);
        });
    })
} catch (e) {
    console.log(e);
}



var clientBTN = document.querySelectorAll('#clientBTN');




var clientList = {
    client1: {
        'name': "Abdur Rehman",
        'feedback': 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat odio cupiditate ipsam? Repellat accusamus maiores illum autem, laboriosam non atque omnis iste repudiandae hic provident rerum eius, fugit labore in?',
        'img': 'client1.png'
    },
    client2: {
        'name': "Rehman Mustafa",
        'feedback': 'Repellat accusamus maiores illum autem, laboriosam non atque omnis iste repudiandae hic provident rerum eius, fugit labore in Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat odio cupiditate ipsam?',
        'img': 'client2.jpg'
    },
    client3: {
        'name': "Noman Mustafa",
        'feedback': 'consectetur adipisicing elit. Placeat odio cupiditate ipsam? Repellat accusamus maiores illum autem, laboriosam non atque omnis iste repudiandae hic provident rerum eius, fugit labore in?  ipsum dolor sit amet ',
        'img': 'client3.jpg'
    },
    client4: {
        'name': "Hannan Mustafa",
        'feedback': 'maiores illum autem, laboriosam non atque omnis iste repudiandae hic provident rerum eius, fugit labore in? Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat odio cupiditate ipsam? Repellat accusamus ',
        'img': 'client4.jpg'
    },
    client5: {
        'name': "Usman Mustafa",
        'feedback': 'adipisicing elit. Placeat odio cupiditate ipsam? Repellat accusamus maiores illum autem, laboriosam non atque omnis iste repudiandae hic provident rerum eius, fugit labore in? Lorem ipsum dolor sit amet consectetur',
        'img': 'client5.jpg'
    }
};




clientBTN.forEach(e => {
    e.addEventListener('click', function () {

        var baseURL = window.location.origin;

        var imgDir = 'web_assets/frontend/assets/clients/';

        document.querySelector('#clientName').innerText = clientList[e.dataset.clientId]['name'] ?? "Empty";
        document.querySelector('#clientFeedback').innerText = clientList[e.dataset.clientId]['feedback'] ?? "Empty";
        document.querySelector('#clientImg').src = baseURL + "/" + imgDir + (clientList[e.dataset.clientId]['img'] ?? 'client1.png');
        // console.log(window.location);

        // console.log(baseURL + "/" + imgDir + (clientList[e.dataset.clientId]['img'] ?? 'client1.png'));



    });
});
