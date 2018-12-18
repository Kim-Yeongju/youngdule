
var app = new Vue({
    el : '#app',
    data : {
        message : '안녕하세요 Vue!'
    }
});

var app2 = new Vue({
    el : '#app-2',
    data:{
        message : '이 페이지는 ' + new Date() + ' 에 로드 되었씁니다'
    }
});

var app3 = new Vue({
    el : '#app-3',
    data : {
        seen: true
    }
});

var app4 = new Vue({
    el: '#app-4',
    data : {
        todos : [
            {text: "javaScript 배우기"},
            {text: "Vue 배우기"},
            {text: "무언가 멋진 것을 만들기"}
        ]
    }
});