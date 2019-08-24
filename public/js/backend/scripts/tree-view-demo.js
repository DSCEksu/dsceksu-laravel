$(function(){
    $('#jstree').jstree({
      core : {
            'check_callback' : true
        },
        plugins:["dnd","types","contextmenu"],
        types : {
            'default' : {
                'icon' : 'fa fa-folder'
            },
            'file' : {
                icon : 'fa fa-file-o'
            },
            'html' : {
                icon : 'fa fa-file-code-o'
            },
            'css' : {
                icon : 'fa fa-file-code-o'
            },
            'js' : {
                icon : 'fa fa-file-text-o'
            },
            'img' : {
                icon : 'fa fa-file-image-o'
            },
            'audio' : {
                icon : 'fa fa-file-audio-o'
            },
            'video' : {
                icon : 'fa fa-file-video-o'
            },
        }
    });

    // Json data example
    $('#jstree-json').jstree({
      core : {
            check_callback : true,
            data: [
                {text: 'Empty Folder', icon: 'fa fa-folder'},
                {
                    text: 'assets',
                    icon: 'fa fa-folder',
                    state: {'opened': true},
                    children: [
                        {text:'index.html', icon:'fa fa-file-code-o'},
                        {text:'style.css', icon:'fa fa-file-code-o'},
                        {text:'js', icon:'fa fa-folder', state:{opened:true}, children:[
                            {text:'bootstrap.js', icon:'fa fa-file-code-o'},
                            {text:'jquery.js', icon:'fa fa-file-code-o'},
                        ]}
                    ]
                }
            ]
        },
        plugins:["dnd","types","contextmenu"],
    });
});