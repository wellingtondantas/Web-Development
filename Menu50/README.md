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


## Comandos secundários

```
<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
```

## Nome e Título

```
<?php bloginfo( 'name' ); ?>
```


```
<title>
    <?php
        if ( is_single() ) { 
            single_post_title(); echo ' - '; bloginfo( 'name' );
            
        }elseif ( is_home() || is_front_page() ) { 
            bloginfo('name'); echo ' - '; bloginfo('description'); 
            
        }elseif ( is_page() ) { 
            single_post_title(''); echo ' - '; bloginfo( 'name' );
            
        }elseif ( is_search() ) { 
            bloginfo('name'); print ' - Resultados para ' . wp_specialchars($s); get_page_number(); 
            
        }elseif ( is_404() ) { 
            bloginfo('name'); print ' - Nada encontrado'; 
            
        }else { 
            bloginfo( 'name' ); echo ' - '; bloginfo('description');
            
        }
    ?>
</title>
```