# Menu50 Digital


## Arquivos Inportantes
header.php – contém o código para a seção de cabeçalho do tema.

index.php – contém o código da Área Principal e especificará onde os outros arquivos serão incluídos. Este é o arquivo principal do tema.

sidebar.php – contém as informações sobre a barra lateral.

footer.php – lida com a seção de rodapé.

style.css – responsável pelo estilo do seu tema


## Forma normal

```
<?php get_header(); ?>
 
        <div id="index">
            <div id="conteudo">
                <div class="post">posts</div>
                <div class="post">posts</div>
            </div>
            <div id="sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>

<?php get_footer(); ?>
```



