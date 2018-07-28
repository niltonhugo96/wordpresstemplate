<ol>
	<?php
	//Comentários
	$comments = get_comments(array(
		'post_id'		=> XXX,
		'status'		=> 'approve' //Tipo de comentário
	));

	wp_list_comments(array(
		'per_page'				=> 10,
		'reverse_top_level'		=> false
	), $comments);

	?>

	</ol>

	<?php

	$comments_args = array(
		'label_submit'=>'Enviar', //Titulo Botão
		'title_reply'=>'Deixe sua resposta', // Rótulo Resposta
		'comment_notes_after'=>'', // Texto/Html exibido depois dos comentários
		'comment_field'=>        //Campo de comentários
		'<p>
			<label for="comment">'._x( 'Comment','noun').'</label><br />
			<textarea id="comment" name="comment" aria-required="true"></textarea>
		</p>', 
	);
	comment_form($comments_args);
	?>

