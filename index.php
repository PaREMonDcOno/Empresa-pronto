<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bool Technology</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header class="site-header">
        <nav class="navbar container" aria-label="Navegação principal">
            <a href="#home" class="brand" aria-label="Bool Technology - início">
                <img src="img/Logo empresa (1).png" alt="Logo da Bool Technology" class="logo">
            </a>

            <ul class="nav-links" id="nav-links">
                <li><a href="#home" class="js-scroll">Home</a></li>
                <li><a href="#empresa" class="js-scroll">Empresa</a></li>
                <li><a href="#portfolios" class="js-scroll">Portfólios</a></li>
                <li><a href="#services" class="js-scroll">Serviços</a></li>
                <li><a href="#contato" class="js-scroll">Contato</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home" class="hero reveal" aria-labelledby="home-title">
            <video autoplay muted loop playsinline aria-hidden="true">
                <source src="video/25380-350507864_small.mp4" type="video/mp4">
            </video>

            <div class="container cont-hero">
                <div class="hero-content">
                    <div class="badge">
                        <span class="badge-dot"></span>
                        Tecnologia que transforma negócios
                    </div>

                    <h1 id="home-title">Bem-vindo a <span>Bool Technology</span></h1>
                    <p>
                        Lógica, criatividade e tecnologia trabalhando juntas para transformar ideias
                        em soluções digitais reais, escaláveis e eficientes.
                    </p>

                    <div class="hero-actions">
                        <a href="#portfolios" class="btn btn-gradient js-scroll">Ver portfólios</a>
                        <a href="#contato" class="btn btn-outline js-scroll">Falar com a gente</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="empresa" class="section section-empresa reveal" aria-labelledby="empresa-title">
            <div class="container">
                <h2 id="empresa-title">Sobre a Bool Technology</h2>
                <p class="section-subtitle">
                    Uma empresa criada para simplificar o acesso à tecnologia e gerar impacto real em pessoas e negócios.
                </p>

                <div class="empresa-grid">
                    <article class="empresa-card">
                        <img src="img/nossa historia.png" alt="Ilustração sobre a história da empresa" class="empresa-image">
                        <div class="empresa-content">
                            <h3>Nossa história</h3>
                            <p>
                                A Bool Technology nasceu da inquietação de jovens desenvolvedores.
                            </p>
                            <p class="empresa-texto" id="historia" style="display: none;">
                                Eles compartilhavam a mesma visão: a tecnologia pode e deve ser um agente de transformação real.
                                Durante anos, observaram como pequenas e médias empresas tinham dificuldades em acessar soluções
                                digitais de qualidade, muitas vezes presas a sistemas caros, complicados ou ultrapassados.
                                Movidos pelo desejo de democratizar o acesso à tecnologia, decidiram unir conhecimento técnico,
                                criatividade e espírito empreendedor para criar soluções simples, acessíveis e eficazes.
                            </p>
                            <button class="btn btn-gradient btn-small" type="button" onclick="toggleTexto('historia')">Leia mais</button>
                        </div>
                    </article>

                    <article class="empresa-card">
                        <img src="img/Nossa missão.png" alt="Ilustração sobre a missão da empresa" class="empresa-image">
                        <div class="empresa-content">
                            <h3>Nossa missão</h3>
                            <p>
                                Desenvolver soluções tecnológicas inovadoras, acessíveis e seguras.
                            </p>
                            <p class="empresa-texto" id="missao" style="display: none;">
                                Nosso foco é criar processos e ferramentas que potencializem a transformação digital de pessoas
                                e empresas, promovendo eficiência, segurança, escalabilidade e impacto positivo na sociedade.
                            </p>
                            <button class="btn btn-gradient btn-small" type="button" onclick="toggleTexto('missao')">Leia mais</button>
                        </div>
                    </article>

                    <article class="empresa-card">
                        <img src="img/nossa visao.png" alt="Ilustração sobre a visão da empresa" class="empresa-image">
                        <div class="empresa-content">
                            <h3>Nossa visão</h3>
                            <p>
                                Ser reconhecida como referência em inovação tecnológica no Brasil.
                            </p>
                            <p class="empresa-texto" id="visao" style="display: none;">
                                A Bool Technology busca transformar ideias em soluções digitais práticas e eficazes,
                                impulsionando o crescimento sustentável dos clientes e contribuindo para a evolução do
                                ecossistema tecnológico nacional.
                            </p>
                            <button class="btn btn-gradient btn-small" type="button" onclick="toggleTexto('visao')">Leia mais</button>
                        </div>
                    </article>

                    <article class="empresa-card">
                        <img src="img/nossos valores.png" alt="Ilustração sobre os valores da empresa" class="empresa-image">
                        <div class="empresa-content">
                            <h3>Nossos valores</h3>
                            <p>
                                <strong>Inovação contínua:</strong> buscamos novas formas de resolver problemas reais.
                            </p>
                            <div class="empresa-texto empresa-lista" id="valores" style="display: none;">
                                <p><strong>Acessibilidade:</strong> criamos soluções utilizáveis e viáveis para diferentes perfis de negócio.</p>
                                <p><strong>Transparência:</strong> mantemos uma relação clara, ética e confiável com clientes e parceiros.</p>
                                <p><strong>Colaboração:</strong> acreditamos que bons resultados dependem de equipe, troca e parceria.</p>
                                <p><strong>Impacto positivo:</strong> desenvolvemos tecnologia para melhorar processos, negócios e comunidades.</p>
                                <p><strong>Agilidade:</strong> buscamos adaptação rápida e entrega constante de valor.</p>
                            </div>
                            <button class="btn btn-gradient btn-small" type="button" onclick="toggleTexto('valores')">Leia mais</button>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="portfolios" class="section section-portfolios reveal" aria-labelledby="portfolios-title">
            <div class="container">
                <h2 id="portfolios-title">Portfólios</h2>
                <p class="section-subtitle">
                    Alguns projetos que mostram como transformamos código em resultado.
                </p>

                <div class="portfolios-grid">
                    <article class="portfolio-card">
                        <h3>Fornalha - Doces e Salgados</h3>
                        <p>
                            O <strong>Fornalha - Doces e Salgados</strong> é um site criado para facilitar a visualização
                            e o pedido de produtos artesanais de forma intuitiva e acessível.
                        </p>
                        <p>
                            O projeto foi estruturado com foco em responsividade, navegação fluida e boa experiência em
                            desktop, tablet e celular.
                        </p>

                        <h4>Tecnologias usadas</h4>
                        <ul>
                            <li><strong>Tailwind CSS</strong> - layout moderno, responsivo e limpo.</li>
                            <li><strong>Alpine.js</strong> - interatividade leve, incluindo controle de carrinho.</li>
                            <li><strong>HTML5</strong> - estrutura semântica e acessível.</li>
                            <li><strong>JavaScript</strong> - interações dinâmicas e controle de produtos.</li>
                        </ul>

                        <blockquote class="quote">
                            “Transformando ideias em soluções digitais para um futuro mais conectado e eficiente.”
                        </blockquote>

                        <blockquote class="quote">
                            “A experiência de navegar e comprar no site da Fornalha foi incrível. É fácil de usar,
                            as informações são claras e a navegação é objetiva.”
                            <br>
                            <strong>Maria Oliveira, cliente satisfeita</strong>
                        </blockquote>

                        <a class="btn btn-gradient btn-small" href="https://github.com/GitParaAula/Nicolas-Upload" target="_blank" rel="noopener noreferrer">
                            Ver repositório
                        </a>
                    </article>

                    <article class="portfolio-card">
                        <h3>Aplicativo To-Do List com CRUD Completo</h3>
                        <p>
                            Sistema de gerenciamento de tarefas que permite adicionar, editar, excluir e marcar tarefas
                            como concluídas.
                        </p>
                        <p>
                            O sistema utiliza back-end e banco de dados para garantir persistência das informações e uma
                            experiência simples para organização diária.
                        </p>

                        <h4>Tecnologias usadas</h4>
                        <ul>
                            <li><strong>PHP</strong> - back-end para processamento e regras de negócio.</li>
                            <li><strong>MySQL</strong> - armazenamento e gestão das tarefas.</li>
                            <li><strong>HTML5</strong> - estrutura semântica da aplicação.</li>
                            <li><strong>CSS</strong> - estilização e layout responsivo.</li>
                            <li><strong>jQuery</strong> - interatividade dinâmica sem recarregar a página.</li>
                        </ul>

                        <blockquote class="quote">
                            “Transformando ideias em soluções digitais para um futuro mais organizado e produtivo.”
                        </blockquote>

                        <blockquote class="quote">
                            “A experiência de usar o sistema de gerenciamento de tarefas foi ótima. O design é simples,
                            intuitivo, e a funcionalidade de editar e excluir tarefas facilita a organização.”
                            <br>
                            <strong>João Costa, usuário satisfeito</strong>
                        </blockquote>

                        <a class="btn btn-gradient btn-small" href="https://github.com/PaREMonDcOno/portfolio1.git" target="_blank" rel="noopener noreferrer">
                            Ver repositório
                        </a>
                    </article>
                </div>
            </div>
        </section>

        <section id="services" class="section section-services reveal" aria-labelledby="services-title">
            <div class="container">
                <h2 id="services-title">Serviços</h2>
                <p class="section-subtitle">
                    Do conceito ao deploy: entregamos soluções completas, com foco em eficiência e resultado.
                </p>

                <div class="services-grid">
                    <article class="service-card">
                        <h3>Desenvolvimento de sites e sistemas web</h3>
                        <p>
                            Criação de sites institucionais, landing pages e sistemas web sob medida, focados em
                            performance, responsividade e experiência do usuário.
                        </p>
                    </article>

                    <article class="service-card">
                        <h3>Aplicações personalizadas & integrações</h3>
                        <p>
                            Desenvolvimento de aplicações customizadas, automações e integrações entre sistemas,
                            APIs, bancos de dados e ferramentas externas.
                        </p>
                    </article>

                    <article class="service-card">
                        <h3>Consultoria em transformação digital</h3>
                        <p>
                            Análise de processos, diagnóstico tecnológico e definição de soluções digitais com visão
                            estratégica e prática.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <section id="contato" class="section section-contato reveal" aria-labelledby="contato-title">
            <div class="container">
                <h2 id="contato-title">Contato</h2>
                <p class="section-subtitle">
                    Tem um projeto em mente, precisa de ajuda técnica ou quer trocar ideia sobre tecnologia?
                    Fale com a Bool Technology.
                </p>

                <div class="contato-layout">
                    <div>
                        <p class="contato-intro">
                            Preencha o formulário com o máximo de detalhes possível sobre seu projeto ou necessidade.
                        </p>

                        <form action="formulario.php" method="post">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" id="nome" name="nome" placeholder="Seu nome completo" required>
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" id="email" name="email" placeholder="seuemail@exemplo.com" required>
                            </div>

                            <div class="form-group">
                                <label for="assunto">Assunto</label>
                                <input type="text" id="assunto" name="assunto" placeholder="Sobre o que quer falar?" required>
                            </div>

                            <div class="form-group">
                                <label for="mensagem">Mensagem</label>
                                <textarea id="mensagem" name="mensagem" rows="5" placeholder="Descreva seu projeto, ideia ou problema." required></textarea>
                            </div>

                            <button class="btn btn-gradient" type="submit">Enviar mensagem</button>
                        </form>
                    </div>

                    <aside class="contato-info" aria-label="Outros canais de contato">
                        <h3>Outros canais</h3>
                        <p><strong>E-mail:</strong> contato@booltechnology.com</p>
                        <p><strong>Telefone/WhatsApp:</strong> (11) 99999-9999</p>
                        <p><strong>Cidade:</strong> São Paulo - SP</p>
                        <p><strong>Disponibilidade:</strong> Horário comercial, com possibilidade de reuniões remotas agendadas.</p>
                    </aside>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        &copy; <span id="year"></span> Bool Technology. Todos os direitos reservados.
    </footer>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        revealOnScroll();
        atualizarAnoRodape();
        iniciarScrollManual();
    });

    window.addEventListener("scroll", revealOnScroll);

    function atualizarAnoRodape() {
        const year = document.getElementById("year");

        if (year) {
            year.textContent = new Date().getFullYear();
        }
    }

    function revealOnScroll() {
        const reveals = document.querySelectorAll(".reveal");
        const windowHeight = window.innerHeight;
        const elementVisible = 150;

        reveals.forEach(function (el) {
            const elementTop = el.getBoundingClientRect().top;

            if (elementTop < windowHeight - elementVisible) {
                el.classList.add("active");
            } else {
                el.classList.remove("active");
            }
        });
    }

    function toggleTexto(id) {
        const texto = document.getElementById(id);

        if (!texto) {
            return;
        }

        const btn = texto.nextElementSibling;

        texto.classList.toggle("expanded");

        if (texto.style.display === "none" || texto.style.display === "") {
            texto.style.display = "block";

            if (btn) {
                btn.textContent = "Leia menos";
            }
        } else {
            texto.style.display = "none";

            if (btn) {
                btn.textContent = "Leia mais";
            }
        }
    }

    function iniciarScrollManual() {
        const links = document.querySelectorAll(".js-scroll");

        links.forEach(function (link) {
            link.addEventListener("click", function (event) {
                event.preventDefault();

                const targetId = link.getAttribute("href");

                if (!targetId || targetId === "#") {
                    return;
                }

                const targetElement = document.querySelector(targetId);

                if (!targetElement) {
                    console.warn("Seção não encontrada:", targetId);
                    return;
                }

                scrollSuavePara(targetElement);
            });
        });
    }

    function scrollSuavePara(elemento) {
        const header = document.querySelector(".site-header");
        const headerHeight = header ? header.offsetHeight : 0;

        const posicaoInicial = window.pageYOffset;
        const posicaoDestino = elemento.getBoundingClientRect().top + window.pageYOffset - headerHeight;

        const distancia = posicaoDestino - posicaoInicial;
        const duracao = calcularDuracao(distancia);

        let inicio = null;

        function animarScroll(timestamp) {
            if (inicio === null) {
                inicio = timestamp;
            }

            const tempoDecorrido = timestamp - inicio;
            const progresso = Math.min(tempoDecorrido / duracao, 1);
            const progressoSuavizado = easeInOutCubic(progresso);
            const posicaoAtual = posicaoInicial + distancia * progressoSuavizado;

            window.scrollTo(0, posicaoAtual);

            if (progresso < 1) {
                requestAnimationFrame(animarScroll);
            }
        }

        requestAnimationFrame(animarScroll);
    }

    function calcularDuracao(distancia) {
        const distanciaAbsoluta = Math.abs(distancia);
        const duracaoMinima = 450;
        const duracaoMaxima = 1200;
        const duracaoCalculada = distanciaAbsoluta * 0.6;

        return Math.min(Math.max(duracaoCalculada, duracaoMinima), duracaoMaxima);
    }

    function easeInOutCubic(t) {
        if (t < 0.5) {
            return 4 * t * t * t;
        }

        return 1 - Math.pow(-2 * t + 2, 3) / 2;
    }
</script>
</body>
</html>
