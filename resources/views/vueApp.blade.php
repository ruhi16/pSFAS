<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue Js Application</title>
</head>
<body>
    
    <div id="vapp">
        <h1>This is Vue Applicaiton</h1>
        <p> {{ msg }}</p>

    </div>




    <script type="text/javascript" src="vue.js"></script>
    <script type="text/javascript">
        var app = new Vue({
                
                template:`<div id="wraper">
                            <h1>Hello Template!!!</h1>
                            <input type="text" v-model="msg" />
                            <button v-on:click="showHide">Show Msg</button> 
                          </div>`,
                data:{
                    msg: "Hello World!"
                },
                methods:{
                    showHide(event){
                        console.log("showHide() method called!!"+event)
                    }
                },
                mounted(){
                    this.showHide()
                }
            }).$mount('#vapp');
    </script>

</body>
</html>