

<link rel="stylesheet" href="<?=base_url('assets/flip-book/wow_book.css')?>" type="text/css" />
<script src="<?=base_url('assets/flip-book/jquery.js')?>"></script>
                                           
    <div class="col-xss-12 col-xs-12 col-sm-6 col-md-6 col-md-offset-3">
        <div id="services">
			<div id='book2-trigger' class="text-center" style="text-align: center;">
			<div class="service-box">
			<!-- Final thumbnail image from the canvas will be rendered here -->
            <div id="thumbnail"></div>
            	<h3>Click here to read.</h3>
			</div> 
			</div>
        </div>
    </div>
                                               
    <div style='display: block;'>
        <div id='book2'></div>            
    </div>



    <script type="text/javascript">
        $(function(){
                        function fullscreenErrorHandler(){
                            if (self!=top) return "The frame is blocking full screen mode. Click on 'remove frame' button above and try to go full screen again."
                        }

                var optionsBook2 = {
                        height   : 1024,
                        width    : 725*2
                        // ,maxWidth : 800
                        // ,maxHeight : 400
                        ,pageNumbers: false
                                        
                        ,pdf: "<?=$pdf_url; ?>"
                        ,pdfFind: true
                        ,pdfTextSelectable: true
                        ,lightbox : "#book2-trigger"
                        ,lightboxClass : "lightbox-pdf"
                        ,centeredWhenClosed : true
                        ,hardcovers : true
                        ,curl: false
                        ,toolbar: "lastLeft, left, currentPage, right, lastRight, find, toc, zoomin, zoomout, download, flipsound, fullscreen, thumbnails"
                        ,thumbnailsPosition : 'bottom'
                        ,responsiveHandleWidth : 50
                        ,onFullscreenError: fullscreenErrorHandler
                        };
                                        
                        var books = {
                                    "#book2" : optionsBook2,
                                    };
                                    $("#book2-trigger").on("click",function(){
                                    	buildBook( "#"+this.id.replace("-trigger", "") );
                                                    })
                                        
                                    function buildBook( elem ){
                                        var book=$.wowBook(elem);
                                        if (!book) {
                                            $(elem).wowBook( books[elem] );
                                            book=$.wowBook(elem);
                                            }
                                            // book.opts.onHideLightbox = function(){
                                            //     setTimeout( function(){ book.destroy(); }, 1000);
                                            // }
                                            book.showLightbox();
                                            }
                    });
                                                
</script>
    

<script type="text/javascript" src="<?=base_url('assets/flip-book/pdf.combined.min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('assets/flip-book/wow_book.min.js')?>"></script>
 <!-- flip book jQuery  -->
<script src="<?=base_url('assets/flip-book/modernizr.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/flip-book/pdf.js')?>" type="text/javascript"></script>
<script>
    
      // set the pdfjs worker source. not sure if PDFjs uses 'webworkers' API of HTML5
      PDFJS.workerSrc = "<?=base_url('assets/flip-book/pdf.worker.js')?>";

      $(document).ready(function() {

        // check for necessary features
        featureCheck();

        var PDF_FILES_DIRECTORY = "", // this demo is currenlty put as gist which does not support directories
            // these files should exist in the given path to display correctly
            PDF_FILES = ['<?=$pdf_url; ?>'];

        var CURRENT_FILE = {},

            $info_name = $("#file_name_info"),
            $info_pages = $("#file_pages_info");
/*
            $(".action").click( function () {
                var id = $(this).attr("id");
                var msg = '';
                switch (id) {
                    case 'rename':
                        msg = "Rename " + CURRENT_FILE.name + " ?";
                    break;

                    case 'share':
                        msg = "Sharing " + CURRENT_FILE.name + " !!";
                    break;

                    case 'remove':
                        msg = "Remove " + CURRENT_FILE.name + " !?";
                    break;
                }
                alert(msg);
            } );
*/
        $.each( PDF_FILES, function (index, pdf_file) {
            
            PDFJS.getDocument( PDF_FILES_DIRECTORY + pdf_file ).then( function (pdf) {

                pdf.getPage(1).then( function (page) {

                    var viewport = page.getViewport(0.5);
                    // PDF.js returns a promise when it gets a particular page from the pdf object
                    // A canvas element is used to render the page and convert into an image thumbnail
                    // if single canvas is used, the content gets overridden when PDF.js promises resolve for subsequent files
                    // so a dedicated canvas element is created for rendering a thumbnail for each pdf
                    // the canvas element is discarded once the thumbnail is created.
                    var canvas = document.createElement('canvas');
                    var ctx = canvas.getContext('2d');
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    var renderContext = {
                        canvasContext: ctx,
                        viewport: viewport
                    };

                    page.render(renderContext).then( function() {

                        //set to draw behind current content
                        ctx.globalCompositeOperation = "destination-over";
                        //set background color
                        ctx.fillStyle = "#fff";
                        //draw on entire canvas
                        ctx.fillRect( 0, 0, canvas.width, canvas.height );
                        // create an img from the canvas which contains the page contents
                        var img_src = canvas.toDataURL();
                        var $img = $("<img>")
                                        .attr("src", img_src);

                        var file_details = {
                            "name": pdf_file,
                            "pages": pdf.pdfInfo.numPages
                        };

                        var $thumb = $("<div>")
                                        .attr("class", "thumb")
                                        .attr("data-pdf-details", JSON.stringify(file_details))
                                    
                                        /*.append( $("<div>").attr("class", 'info').text(pdf_file) )*/
                                        .append($img)
                                        .click( function () {
                                            CURRENT_FILE = $(this).data("pdf-details");
                                            $info_name.text(CURRENT_FILE.name);
                                            $info_pages.text(CURRENT_FILE.pages);
                                            $(".thumb").removeClass("current");
                                            $(this).addClass("current")
                                        } );

                        $thumb.appendTo("#thumbnail").dbclick();
                        // we have created a thumbnail and rendered the img from the canvas
                        // discard the temporary canvas created for rendering this thumbnail
                        canvas.remove();                    
                        //$(canvas).remove();

                    });

              }); // end of getPage

            }); // end of getDocument

        }); // end of each

      }); // end of doc ready

    function featureCheck () {
        // feature list required for this demo
        var features = ['webworkers', 'canvas'];
        var featuresAbsent = false;
        var $list = $("<ul>")
                        .attr("id", "feature_list");
        $.each( features, function (index, feature) {
            if (Modernizr[feature]) {
                console.log("SUCCESS: " + feature + " present");
                var $li = $("<li>")
                              .css({
                                "border": "thin solid black",
                                "padding": "5px",
                                "margin": "5px",
                                "width": "auto",
                                "background": "lightgreen"
                              })
                              .text("SUCCESS: " + feature + " present");
                $list.append($li);
            } else {
                // necessary feature is not present
                featuresAbsent = true;
                console.log("FAILURE: " + feature + " NOT present");
                var $li = $("<li>")
                              .css({
                                "border": "thin solid black",
                                "padding": "5px",
                                "margin": "5px",
                                "width": "auto",
                                "background": "red"
                              })
                              .text("FAILURE: " + feature + " NOT present");
                $list.append($li);
            }
        } );
        // append the feature list if any of the feature is not present
        if (featuresAbsent) {
            $(document.body).append($list);
        }
    }
 
    </script> 
