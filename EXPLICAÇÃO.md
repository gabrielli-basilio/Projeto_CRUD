# 💾 Backup do Código Anterior (Antes do Fork)

Esta branch foi criada apenas para guardar o código que eu estava fazendo antes de precisar fazer o fork do repositório CRUD do professor.

## ❓ O que aconteceu?
Como eu faltei em uma aula e acabei me perdendo no conteúdo de outra, meu código ficou um pouco desatualizado em relação ao que estava sendo feito. Para conseguir acompanhar realizei o fork do repositório do professor e continuei o trabalho por ele.

## 📌 Por que guardei esse código aqui?
Decidi trazer meu código anterior para esta branch (`codigo_antigo`) apenas para deixar registrado o que eu já tinha feito nas aulas anteriores.

Ele serve como um histórico do que eu tinha realizado acompanhando as aulas antes de faltar e me perder 😃

---

## 🛠️ Comandos que utilizei pra trazer o repositório antigo com commit como branch.

### 1️⃣ # 1. Vinculou este repositório novo como um destino secundário no projeto antigo
```bash
git remote add destino URL-do-repositório-novo
```

### 2️⃣ # 2. Enviou os commits da "master" antiga diretamente para a branch "codigo_antigo" aqui
```bash
git push destino master:codigo_antigo
```