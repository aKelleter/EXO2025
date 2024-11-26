const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

  function initCodeMirror(classes, modes)
  {
    //DEBUG// console.log(classes);
    if (classes.length > 0) {            
        for (let id of classes) {
            let cdmr = CodeMirror.fromTextArea(id, {
            mode: modes,
            lineNumbers: true,
            matchBrackets: true,
            theme: "material",
            lineWiseCopyCut: true,
            styleActiveLine: true,
            readOnly : true,
            extraKeys: {
                "F11": function(cm) {
                  cm.setOption("fullScreen", !cm.getOption("fullScreen"));
                },
                "Esc": function(cm) {
                  if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
                }
              },
            undoDepth: 200            
          });
          cdmr.setSize("100%","100%") // Width, Height of editor 
          console.log("id : " + id + " not found");
          console.log("mode : " + modes + " not found");
        }
    } else {
        //DEBUG// 
        
    }
  }

  initCodeMirror(document.getElementsByClassName("code-js"), "javascript");
  initCodeMirror(document.getElementsByClassName("code-php"), "javascript");