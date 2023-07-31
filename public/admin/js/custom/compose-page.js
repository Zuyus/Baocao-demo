ClassicEditor
.create( document.querySelector( '#compose-email-text' ), {
    // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
} )
.then( editor => {
    window.editor = editor;
} )
.catch( err => {
    console.error( err.stack );
} );