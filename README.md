Propósito da prova:

git é uma ferramenta para controle de versões do seu código que também pode ser integrado ao github, podendo acessar o código de qualquer lugar. O github também facilita o gerenciamento de trabalho em grupo, o que permite uma
maior agilidade e eficiência na produção de um software.

Comandos git usados: 

git init: inicia o repositório localmente;

git status: verifica o status atual do repositorio (itens a serem adicionados e itens a serem commitados);

git add . : adiciona todos os arquivos não rastreados existentes no repositório (o '.' pode ser substituído pelo nome e extensão de um arquivo especifico que queira adicionar);

git remote add origin <link> : faz conexão com o repositorio remoto do github;

git commit -a -m 'mensagem': cria um commit(confirmação de alteração) local;

git push origin <branch> : envia esse commit para o repositório remoto (github) para a branch informada;

git chechout -b <branch>: cria e troca a branch automáticamente;
