<?php

/**
 * Elgg Feedback plugin
 * Feedback interface for Elgg sites
 *
 * @package Feedback
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Guilheme Luiz Lessa
 * @project RESA http://resa.iff.edu.br
 * @copyright Prashant Juvekar
 * @link http://www.linkedin.com/in/prashantjuvekar
 *
 * for Elgg 1.8 by iionly
 * iionly@gmx.de
 */

	$portugues_brasileiro = array(

		'admin:administer_utilities:feedback' => 'Mensagens do Fale Conosco :D',
		'item:object:feedback' => 'Fale Conosco',
		'feedback:label' => 'Fale Conosco',
		'feedback:title' => 'Fale Conosco',

		'feedback:admin:title' => 'Fale Conosco - Mensagens',
		'feedback:widget:description' => 'Mostrar comentários feitos por membros do site',
		'feedback:numbertodisplay' => 'Número de entradas de feedback para exibir.',

		'feedback:message' => 'Gostou? Não gostou? Quer sugerir novas funcionalidades ou relatar um bug? Gostaríamos muito de ouvir de você.',

		'feedback:default:id' => 'Nome e/ou e-m@il',
		'feedback:default:txt' => 'Deixe-nos saber o que você pensa!',
		'feedback:default:txt:err' => 'Nenhuma mensagem de feedback foi fornecida. \n Nós valorizamos as suas sugestões e críticas. \n Por favor digite sua mensagem e clique em Enviar.',

		'feedback:captcha:blank' => 'Por favor, digite o captcha',

		'feedback:submit_msg' => 'Enviando...',
		'feedback:submit_err' => 'Não foi possível enviar sua mensgaem!',

		'feedback:submit:error' => 'Não foi possível enviar sua mensagem',
		'feedback:submit:success' => 'Sua mensagem foi enviada com sucesso. Responderemos o mais rápido possível. \n Obrigado!',

		'feedback:delete:success' => 'A mensagem foi excluída com sucesso.',

		'feedback:mood:' => 'Indiferente',
		'feedback:mood:angry' => 'Irritado',
		'feedback:mood:neutral' => 'Neutro',
		'feedback:mood:happy' => 'Feliz',

		'feedback:about:' => 'Indiferente',
		'feedback:about:bug_report' => 'Bug',
		'feedback:about:content' => 'Conteúdo',
		'feedback:about:suggestions' => 'Sugestões',
		'feedback:about:compliment' => 'Complemento',
		'feedback:about:other' => 'Outros',

		'feedback:list:mood' => 'Humor',
		'feedback:list:about' => 'Sobre',
		'feedback:list:page' => 'Fale Conosco',
		'feedback:list:from' => 'De',
		'feedback:list:nofeedback' => 'Atualmente não há feedback dos membros do site disponíveis.',

		'feedback:user_1' => "Nome de Usuário (username) 1:",
		'feedback:user_2' => "Nome de Usuário (username) 1:",
		'feedback:user_3' => "Nome de Usuário (username) 1:",
		'feedback:user_4' => "Nome de Usuário (username) 1:",
		'feedback:user_5' => "Nome de Usuário (username) 1:",
		'feedback:settings:public' => "Autorizar fale conosco para visitantes(e/ou usuários não logados)?",
		'feedback:settings:usernames' => "Você pode inserir até 5 usuários que devem receber notificações se nova for enviada. Digite os nomes de usuário abaixo:",

		'feedback:email:subject' => 'Mensagem de: %s',
			'feedback:email:body' => '%s',
	);

	add_translation('pt_br', $portugues_brasileiro); 
?>
