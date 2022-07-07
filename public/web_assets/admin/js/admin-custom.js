/* images preview before upload in add blog page */



var imageInput = document.querySelector('#multipleImages');

if (imageInput) {
    imageInput.addEventListener('change', () => {
        var inputImagePreview = document.querySelector("#inputImgPreview");
        inputImagePreview.style.padding = "20px 0px";
        for (let i = 0; i < imageInput.files.length; i++) {
            var src = window.URL.createObjectURL(imageInput.files[i]);
            inputImagePreview.innerHTML += `<img class="m-2" style="width:30%; max-width:12rem; " src="${src}" />`;
        }
    })
}


/* manipulating array of imageList in edit blog page */


var delBlogImgBtn = document.querySelectorAll('#delBlogImg');

if (delBlogImgBtn) {
    delBlogImgBtn.forEach(e => {


        e.addEventListener('click', function () {

            var imgUrlList = document.querySelector('#imagesUrlList');

            imgUrlList = JSON.parse(imgUrlList.value);
            /* filtered from delete img */
            var filteredArray = imgUrlList.filter(imgURL => {
                if (imgURL == e.dataset['imgName']) {
                    (e.parentNode.parentNode).removeChild(e.parentNode)
                    
                }

                return imgURL != e.dataset['imgName'];
            });

            document.querySelector('#imagesUrlList').value = JSON.stringify(filteredArray);

            console.log(document.querySelector('#imagesUrlList').value);




        });
    })
}
