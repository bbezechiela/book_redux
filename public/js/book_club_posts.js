// lets gow
document.addEventListener('DOMContentLoaded', () => {
    // create post 
    const createButton = document.getElementById('create-post');
    createButton.addEventListener('click', createPost);
    
    let first_img_file = null;
    document.getElementById('first_img').addEventListener('change', (event) => {
        const files = event.target.files;

        const first_img_holder = document.getElementById('first_img_holder');

        if (files.length > 0) {
            first_img_file = files[0];
            first_img_holder.classList.remove('image-holder', 'imageLabels');

            first_img_holder.classList.add('labelWithImg');
            first_img_holder.style.backgroundImage = `url(${URL.createObjectURL(first_img_file)})`; 
        } else {
            console.log('no file selected');
        }
    });
    
    let second_img_file = null;
    document.getElementById('second_img').addEventListener('change', (event) => {
        const files = event.target.files;

        const second_img_holder = document.getElementById('second_img_holder');

        if (files.length > 0) {
            second_img_file = files[0];
            second_img_holder.classList.remove('image-holder', 'imageLabels');

            second_img_holder.classList.add('labelWithImg');
            second_img_holder.style.backgroundImage = `url(${URL.createObjectURL(second_img_file)})`;
        } else {
            console.log('no file selected');
        }
    });

    let third_img_file = null;
    document.getElementById('third_img').addEventListener('change', (event) => {
        const files = event.target.files;

        const third_img_holder = document.getElementById('third_img_holder');

        if (files.length > 0) {
            third_img_file = files[0];
            third_img_holder.classList.remove('image-holder', 'imageLabels');

            third_img_holder.classList.add('labelWithImg');
            third_img_holder.style.backgroundImage = `url(${URL.createObjectURL(third_img_file)})`;
        } else {
            console.log('no file selected');
        }
    });

    let fourth_img_file = null;
    document.getElementById('fourth_img').addEventListener('change', (event) => {
        const files = event.target.files;

        const fourth_img_holder = document.getElementById('fourth_img_holder');

        if (files.length > 0) {
            fourth_img_file = files[0];
            fourth_img_holder.classList.remove('image-holder', 'imageLabels');

            fourth_img_holder.classList.add('labelWithImg');
            fourth_img_holder.style.backgroundImage = `url(${URL.createObjectURL(fourth_img_file)})`;
        } else {
            console.log('no file selected');
        }
    });

    let fifth_img_file = null;
    document.getElementById('fifth_img').addEventListener('change', (event) => {
        const files = event.target.files;

        const fifth_img_holder = document.getElementById('fifth_img_holder');

        if (files.length > 0) {
            fifth_img_file = files[0];
            fifth_img_holder.classList.remove('image-holder', 'imageLabels');

            fifth_img_holder.classList.add('labelWithImg');
            fifth_img_holder.style.backgroundImage = `url(${URL.createObjectURL(fifth_img_file)})`;
        } else {
            console.log('no file selected');
        }
    });

    async function createPost() {
        // post element
        const captionText = document.getElementById('exampleTextarea').value;

        const formData = new FormData();
        formData.append('current_bookClub_name', current_bookClub_name);
        formData.append('current_user_id', current_user_id);
        formData.append('caption', captionText);
        formData.append('first_img', first_img_file);
        formData.append('second_img', second_img_file);
        formData.append('third_img', third_img_file);
        formData.append('fourth_img', fourth_img_file);
        formData.append('fifth_img', fifth_img_file);

        const adder = await fetch('/createPost', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrf_token,
            },
            body: formData,
        });
        const response = await adder.json();

        if (response.data) {
            console.log(response.data);
        } else {
            console.log(response.error);
        }
    }

});