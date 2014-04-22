/*
 *  Place copyright or other info here...
 */

(function(global, $){
    
    // Define core
    var codiad = global.codiad,
        scripts= document.getElementsByTagName('script'),
        path = scripts[scripts.length-1].src.split('?')[0],
        curpath = path.split('/').slice(0, -1).join('/')+'/';

    // Instantiates plugin
    $(function() {    
        codiad.famats.init();
    });

    codiad.famats = {
        
        // Allows relative `this.path` linkage
        path: curpath,
        dialog: curpath + 'dialog.php',

        init: function() {
     		
        },
		
        /**
         * 
         * This is where the core functionality goes, any call, references,
         * script-loads, etc...
         * 
         */
         
         valid: function() {
			var file= encodeURI($('#context-menu').attr('data-path'));
            codiad.modal.load(400, this.dialog +'?question=valid&' +'datapath='+file);	
			console.log(this.dialog +'?question=valid&' +'datapath='+file)	;
         },

         products: function() {
 			 var file= encodeURI($('#context-menu').attr('data-path'));
             codiad.modal.load(400, this.dialog +'?question=products&' +'datapath='+file);
         },
		 
         numberofproducts: function() {
             codiad.modal.load(400, this.dialog +'?question=numberofproducts');		
         },
		 
         validconfiguration: function() {
             codiad.modal.load(400, this.dialog +'?question=validconfiguration');		
         },
		 
         validproduct: function() {
             codiad.modal.load(400, this.dialog +'?question=validproduct');		
         },
         
		 deadfeatures: function() {
             codiad.modal.load(400, this.dialog +'?question=deadfeatures');		
         },
		 
         corefeatures: function() {
             codiad.modal.load(400, this.dialog +'?question=corefeatures');		
         }
    };

})(this, jQuery);
