<div id="obertka-div">
    <div class="prosto-div"><h3>Здесь у вложенные теги</h3></div>
    Почтовые ящики daniil@write.uz -  elyor@write.uz - vlad@write.uz - geller@write.uz?
</div>
<script>
    let d = document.getElementById("obertka-div");
    let regex = /\b([-\w]+@[-\w]+\.\w+)\b/g; //паттерн e-mail
    d.innerHTML  = d.innerHTML.replace(regex, '<a style="color:#ff0000" href="mailto:$1">$1</a>');
</script>