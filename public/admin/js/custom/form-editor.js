ClassicEditor
.create( document.querySelector( '.ck1' ), {
    // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
} )
.then( editor => {
    window.editor = editor;
} )
.catch( err => {
    console.error( err.stack );
} );
