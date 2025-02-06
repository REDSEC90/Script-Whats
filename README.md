### Script.dos.dev.do.futuro

Ola a todos 
para poder colaborar 
facam 

##sigam os comandos. o de baixo é para alternar entre main para master.

git checkout master

##no master sera feito testes e etc.

##apos criar arquicos/scripts facam o seguinte

git add "digite o nome do aquivo aqui(SEM ASPAS)"

##DEPOIS FACA UM COMENTARIO Á REPEITO DO QUE SERA INCLUIDO

git commit -m "breve resumo do que sera adicionado(COM ASPAS)"

##depois analise se foi adicionado e nao tem nenhuma pendencia

git status

#caso nao tiver nenhuma pendencia

git push origin master

##o codigo de cima atualiza a brach que é master(para testes).

##ai vamos alternar para a branch principal/main

git checkout main

## e iremos atualizar o codigo do main fazendo "merge"

git merge master



##codigo abaixo para configurar ssh e poder fazer alteracoes. 

##na parte "~/.ssh/id_rsa_nova" pode deixar "~/.ssh/id_rsa" ou "~/.ssh/qualquer_nome"

ssh-keygen -t rsa -b 4096 -C "email@example.com" -f ~/.ssh/id_rsa_nova

# Inicia o agente SSH

eval "$(ssh-agent -s)"

# Adiciona a nova chave

ssh-add ~/.ssh/id_rsa_nova

##copie o texto exibido e cole no github indo em ssh

cat ~/.ssh/id_rsa_nova.pub

Copie a chave exibida.


Vá para GitHub > Settings > SSH and GPG Keys.

Clique em New SSH key

##usando o comando gh do github

##diferente do "git" o "gh" tem funcoes extras e um pouco diferentes.

##faz login na sua conta.

gh auth login

##cria um issue
