-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Ago-2019 às 15:07
-- Versão do servidor: 10.3.11-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_auxiliar`
--

CREATE TABLE `tb_auxiliar` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `dt_nascimento` varchar(45) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_auxiliar`
--

INSERT INTO `tb_auxiliar` (`id_usuario`, `nome`, `sobrenome`, `email`, `dt_nascimento`, `usuario`, `senha`) VALUES
(1, 'Caroline', 'Athayde', 'carol@rssolucoesconsultoria.com', '02/02/1995', 'carol.athayde.rh', 'a9a0198010a6073db96434f6cc5f22a8');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_avaliacao`
--

CREATE TABLE `tb_avaliacao` (
  `id_avaliacao` int(11) NOT NULL,
  `avaliacao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_avaliacao`
--

INSERT INTO `tb_avaliacao` (`id_avaliacao`, `avaliacao`) VALUES
(1, 'Entrevista individual'),
(2, 'Dinâmica em grupo'),
(3, 'Aplicação de prova'),
(4, 'Pendente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_candidato`
--

CREATE TABLE `tb_candidato` (
  `id_funcionario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(250) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `id_curriculo` int(11) NOT NULL,
  `dt_processo` varchar(100) NOT NULL,
  `id_avaliacao` int(11) DEFAULT 4,
  `id_status` int(11) DEFAULT 4,
  `cargo_id` int(11) DEFAULT NULL,
  `observacao` varchar(1000) DEFAULT 'N/A',
  `hora` varchar(10) NOT NULL,
  `motivo` varchar(255) DEFAULT 'N/A',
  `entrevistador` varchar(250) NOT NULL DEFAULT 'N/A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_candidato`
--

INSERT INTO `tb_candidato` (`id_funcionario`, `nome`, `sobrenome`, `email`, `telefone`, `id_curriculo`, `dt_processo`, `id_avaliacao`, `id_status`, `cargo_id`, `observacao`, `hora`, `motivo`, `entrevistador`) VALUES
(1, 'FABIANA', 'CONCEI??O', 'fabianalimafelix3@gmail.com', '21) 992343329 ', 5, '20/02/2019', 1, 3, 5, 'Candidata informou que n?o p?de comparecer, pois tinha uma outra entrevista de manh? e que n?o daria tempo.', '14:00', 'N/A', 'N/A'),
(2, 'ANARA', 'KAROLINE', 'anarakrodrigues@hotmail.com', '21) 38675375', 5, '20/02/2019', 1, 1, 5, 'Contratada', '14:00', 'N/A', 'N/A'),
(3, 'Maria', 'de', 'maria_marretinha@hotmail.com', '21981713417', 5, '20/02/2019', 1, 1, 5, 'Contratada', '14:00', 'N/A', 'N/A'),
(4, 'RENATO', 'MACHADO', 'renatonit2015@outlook.com', '(21) 98130-5109', 5, '26/02/2019', 1, 3, 5, 'N?o compareceu ao 2? dia de treinamento.', '14:00', 'N/A', 'N/A'),
(5, 'Marcia', 'Santos', 'marciaaraujo0307@gmail.com', '21987338541', 5, '26/02/2019', 1, 3, 5, 'Desistiu do processo', '14:00', 'N/A', 'N/A'),
(6, 'Tiago', 'Gomes', 'tiago.gd.magalhaes@outlook.com', '21 98986-1163', 5, '12/03/2019', 1, 3, 5, 'Tentei contato, por?m sem sucesso', '14:00', 'N/A', 'N/A'),
(7, 'Patr?cia', 'Naiara', 'pattricia.naiara@yahoo.com.br', '21-96974-9765 ', 5, '27/02/2019', 1, 3, 5, 'Indica??o da Juliana / 2 e n?o conseguimos contato', '14:00', 'N/A', 'N/A'),
(8, 'ELISABETE', 'Carvalho', 'beth_lora_rj@yahoo.com.br', '21 976704235 37560471', 5, '28/02/2019', 1, 3, 5, 'Alegou que houve um problema familiar e n?o p?de comparecer.', '10:00', 'N/A', 'N/A'),
(9, 'Leonardo', 'de', '88.leonardosouza@gmail.com', '21 987910603 21 988015854', 5, '28/02/2019', 1, 3, 5, 'Alegou que houve um imprevisto e n?o p?de comparecer.', '10:00', 'N/A', 'N/A'),
(10, 'Leidiane', 'Cipriano', 'leidianecipriano@gmail.com', '968992462', 5, '28/02/2019', 1, 3, 5, 'Tentei contato, por?m sem sucesso', '10:00', 'N/A', 'N/A'),
(11, 'Daniel', 'Fernandes', 'dmagalhaes2606@gmail.com', '(21) 992811486', 5, '28/02/2019', 1, 3, 5, 'Tentei contato, por?m sem sucesso', '10:00', 'N/A', 'N/A'),
(12, 'FABIANO', 'MARQUES', 'fabianomarques20@yahoo.com.br', '3855-6311 ', 5, '11/03/2019', 1, 3, 5, 'Tentei contato, por?m sem sucesso', '10:00', 'N/A', 'N/A'),
(13, 'Marcilaine', 'Dos', 'marcilaine.santos@yahoo.com.br', '(21)97640-7432', 5, '11/03/2019', 1, 3, 5, 'N?o compareceu ao treinamento', '10:00', 'N/A', 'N/A'),
(14, 'Larissa', 'de', 'larissalindafortunato@gmail.com', '21990268733', 5, '12/03/2019', 1, 3, 5, 'Informou que n?o estava mais afim da vaga', '14:00', 'N/A', 'N/A'),
(67, 'adriana', 'melioli', 'adrianamelioli_@hotmail.com', '974951046', 5, '20/03/2019', 1, 3, 5, 'Tentei contato, por?m sem sucesso', '11:00', 'N/A', 'N/A'),
(68, '?Anselmo', 'Cosme', '', '(21) 96884-9748', 5, '12/03/2019', 1, 0, 5, 'Trabalhou a muito tempo atr?s com consignado, mas pode ter perfil ainda. / N?o houve contato', '14:00', 'N/A', 'N/A'),
(70, 'Cristiana', 'de', 'cristianaferreira.rj@gmail.com', '21980252283', 5, '21/03/2019', 1, 3, 5, 'Informou que foi selecionada para outra vaga de emprego no qual ela j? tinha participado da entrevista.', '11:00', 'N/A', 'N/A'),
(71, 'Rivelton', 'Do', 'riveltonreisrj@gmail.com', '(21) 98214-3473', 5, '21/03/2019', 1, 3, 5, 'Tentei contato, por?m sem sucesso', '11:00', 'N/A', 'N/A'),
(72, 'Luiz', 'Paulo', 'luizpaulo.lagrimante@hotmail.com', '(21) 99621-9457', 5, '19/03/2019', 1, 3, 5, 'Tentei contato, por?m sem sucesso', '11:00', 'N/A', 'N/A'),
(73, 'SILAS', 'MACHADO', 'smagestaoempresarial@gmail.com', '(21) 96544-6341', 5, '21/03/2019', 1, 3, 5, 'Possui pouca experi?ncia na ?rea.', '11:00', 'N/A', 'N/A'),
(74, 'Luciane', 'Val?ria', 'lucianepinto20@hotmail.com', '(21) 976622839', 5, '21/03/2019', 1, 3, 5, 'Problema com lideran?a, poss?vel problema comportamental e cita nomes de todos sem nenhum problema.', '11:00', 'N/A', 'N/A'),
(75, 'Suzana', 'Apr?gio', 'sumartins_22rj@yahoo.com.br', '(21) 99698-3657', 5, '22/03/2019', 1, 3, 5, 'Problema comportamental', '11:00', 'N/A', 'N/A'),
(76, 'Marcos', 'De', 'marcosandradeortis@yahoo.com.br', '(21) 99112-7905 ', 5, '25/03/2019', 1, 3, 5, 'N?o possui perfil', '14:00', 'N/A', 'N/A'),
(77, 'FRANCINY', 'ALVAREZ', 'alvarez.franciny@gmail.com', '(21)967765279 ', 5, '25/03/2019', 1, 3, 5, 'Tentei contato, por?m sem sucesso', '14:00', 'N/A', 'N/A'),
(78, 'Gleicy', 'dos', 'gleicypoupacred@gmail.com', '4109-9530', 5, '25/03/2019', 1, 3, 5, '2 o segundo dia de treianemtno', '14:00', 'N/A', 'N/A'),
(79, 'Lucas', 'Daniel', 'lucasdcrf@hotmail.com', '21971869079', 5, '25/03/2019', 1, 3, 5, '2 o treinamento (desclassificada)', '14:00', 'N/A', 'N/A'),
(83, 'Elaine', 'Cristina', 'elainecristinaxlatta@hotmail.com', '21971962524', 5, '19/03/2019', 1, 3, 5, 'Tentei contato, por?m sem sucesso', '11:00', 'N/A', 'N/A'),
(89, 'Izabelly', 'Araujo', 'N/A', '21994825448', 5, '19/03/2019', 1, 3, 5, 'N?o consegui contato', '11:00', 'N/A', 'N/A'),
(90, 'Vanessa', 'Barbosa', 'vanessa.b.souza@gmail.com', '(21) 99244 9144', 5, '19/03/2019', 1, 3, 5, 'Mandou e-mail informando que n?o vai comparecer', '11:00', 'N/A', 'N/A'),
(91, 'Luan', 'Lima', 'luan_lalves@hotmail.com', '(21) 97998-0553', 5, '20/03/2019', 1, 3, 5, 'Tentei contato, por?m sem sucesso', '11:00', 'N/A', 'N/A'),
(93, 'Isabel', 'Cristina', 'rodrigues_social@hotmail.com', '(21) 97976-3889', 5, '25/03/2019', 1, 3, 5, 'Tentei contato, por?m sem sucesso', '14:00', 'N/A', 'N/A'),
(94, 'JULIANA', 'HENRIQUES', 'souzajuh03@gmail.com', '21985424237', 5, '25/03/2019', 1, 3, 5, 'REMARCADA DO PROCESSO DE FEVEREIRO / Tentei contato, por?m sem sucesso', '14:00', 'N/A', 'N/A'),
(95, 'Aline', 'da', 'aline.costa23@hotmail.com', '2405-6188', 5, '25/03/2019', 1, 3, 5, 'Tentei contato, por?m sem sucesso', '14:00', 'N/A', 'N/A'),
(96, 'Carlos', 'Eduardo', 'caduromano98@gmail.com', '21 96665-2644', 5, '25/03/2019', 1, 3, 5, 'REMARCADA DO PROCESSO DE FEVEREIRO / Tentei contato, por?m sem sucesso', '14:00', 'N/A', 'N/A'),
(97, 'Caio', 'Ferreira', 'caio.ferreira07@hotmail.com', '97522-9195 ', 5, '27/03/2019', 1, 3, 5, 'Desistiu do treinamento, pois n?o aceitou os 5 dias.', '14:00', 'N/A', 'N/A'),
(98, 'Isabella', 'Tavares', 'bellatmatos@gmail.com', '(21) 989550174', 5, '27/03/2019', 1, 3, 5, 'Mandou para vaga de promotor 8 horas / Informou que n?o poder? comparecer.', '14:00', 'N/A', 'N/A'),
(99, 'Maria', 'Edileuza', 'meinkampf.pires@gmail.com', '(21) 99195-6354', 5, '27/03/2019', 1, 3, 5, 'Trabalha atualmente', '14:00', 'N/A', 'N/A'),
(100, 'Gabriel', 'Carvalho', 'gabrielmorgato@outlook.com', '(21) 97970-2480', 5, '29/03/2019', 1, 3, 5, '2 por passagem', '14:00', 'N/A', 'N/A'),
(101, 'Rosangela', 'Vieira', 'rosavieiradiniz78@hotmail.com', '(21)969964999', 5, '29/03/2019', 1, 3, 5, 'Mandou para vaga de promotor 8 horas', '14:00', 'N/A', 'N/A'),
(102, 'Marcus', 'Vinicius', 'marcus.santos21@hotmail.com', '(21) 97306-5455', 5, '01/04/2019', 1, 3, 5, 'Mandou para vaga de promotor 8 horas', '14:00', 'N/A', 'N/A'),
(103, 'Rafaela', 'Teixeira', 'rafaelateixeiraalves@gmail.com', '980318394', 5, '01/04/2019', 1, 1, 5, 'N?o consegui entrar em contato para chamar para o treinamento.', '14:00', 'N/A', 'N/A'),
(104, 'Meiryelle', 'Briglia', 'meiry.briglia@hotmail.com', '(21) 96943-7095', 5, '02/04/2019', 1, 3, 5, 'Informou que n?o pode vim, pois houve um imprevisto.', '14:00', 'N/A', 'N/A'),
(105, 'Maria', 'Thereza', 'mariiathereza@gmail.com', '(21) 96525-5920', 5, '02/04/2019', 1, 3, 5, 'Se increveu para vaga de promotor 8h (mandar e-mail) / N?o possui perfil / Foi chamada para consultor de vendas, por?m n?o aceitou.', '14:00', 'N/A', 'N/A'),
(106, 'Yasmim', 'Galdino', 'yasmim.g18@gmail.com', '975403523', 5, '02/04/2019', 1, 3, 5, 'Perfil n?o atende o que buscamos', '14:00', 'N/A', 'N/A'),
(108, 'Thays', 'V.', 'thaysvelaske001@gmail.com', '969349395', 5, '03/04/2019', 1, 3, 5, 'Tentei contato, por?m sem sucesso', '14:00', 'N/A', 'N/A'),
(109, 'Gabriel', 'da', 'gabriel_costa1@hotmail.com', '(21) 975367116 ', 5, '05/04/2019', 1, 3, 5, '2 por passagem', '14:00', 'N/A', 'N/A'),
(110, 'Carina', 'Campos', 'carinapaixao86@gmail.com', '967664314', 5, '05/04/2019', 1, 3, 5, 'Tentei contato, por?m sem sucesso', '14:00', 'N/A', 'N/A'),
(127, 'Daniel', 'Santos', 'daniel.s@email.com.br', '(21) 99745-5444', 1, '30/06/2019', 4, 4, 1, 'Teste', '10:00', 'N/A', 'N/A'),
(128, 'Fatima', 'Gama', 'fatima@email.com', '(21) 98709-9977', 1, '30/06/2019', 4, 4, 3, 'teste', '12:00', 'N/A', 'N/A'),
(129, 'Jonatas', 'Santos', 'jonatasgama@rssolucoes.com', '(21) 98888-5577', 1, '01/07/2019', 4, 1, 1, 'teste', '10:30', NULL, 'Caroline'),
(130, 'Victor', 'Silva', 'victor@site.com.br', '(21) 22224-455', 1, '01/07/2019', 4, 1, 1, 'teste', '12:00', NULL, 'Caroline'),
(131, 'Jonatas', 'Baltar', 'marcelo@outloolk.com', '(21) 21444-4555', 1, '01/07/2019', 4, 1, 1, 'teste', '10:00', NULL, 'Caroline'),
(133, 'Rosangela', 'Santos', 'email@email.com', '(21) 33665-522', 1, '01/07/2019', 4, 4, 1, 'teste', '14:00', NULL, 'Caroline'),
(134, 'Victor', 'Targaryen', 'email@site.co.br.rio', '(21) 77884-455', 1, '02/07/2019', 4, 2, 1, 'teste', '12:00', NULL, 'Caroline'),
(135, 'Rosangela', 'Gama', 'rgama@email.com', '(21) 32770-917', 1, '02/07/2019', 4, 1, 1, 'teste.', '15:00', NULL, 'N/A'),
(136, 'Carlos', 'Silva', 'email@email.com.pt', '(21) 00010-001', 1, '05/07/2019', 4, 1, 1, 'teste', '16:00', NULL, 'N/A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cargo`
--

CREATE TABLE `tb_cargo` (
  `id_cargo` int(11) NOT NULL,
  `cargo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cargo`
--

INSERT INTO `tb_cargo` (`id_cargo`, `cargo`) VALUES
(1, 'Consultor'),
(2, 'Supervisor'),
(3, 'Gerente'),
(4, 'Auxiliar'),
(5, 'Promotor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curriculo`
--

CREATE TABLE `tb_curriculo` (
  `id_curriculo` int(11) NOT NULL,
  `canal` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_curriculo`
--

INSERT INTO `tb_curriculo` (`id_curriculo`, `canal`) VALUES
(1, 'Indeed'),
(2, 'Facebook'),
(3, 'Vagas.com'),
(4, 'InfoJobs'),
(5, 'RioVagas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionario`
--

CREATE TABLE `tb_funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dt_nascimento` varchar(255) NOT NULL,
  `cargo_id` int(11) NOT NULL,
  `usuario` varchar(250) DEFAULT NULL,
  `senha` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_funcionario`
--

INSERT INTO `tb_funcionario` (`id`, `nome`, `sobrenome`, `email`, `dt_nascimento`, `cargo_id`, `usuario`, `senha`) VALUES
(1, 'Gabriel', 'Silva', 'marcelo@outloolk.com', '21/12/1999', 1, 'gabriel.silva', '647431b5ca55b04fdf3c2fce31ef1915'),
(2, 'ricardo', 'souza', 'ricardosantos@gmail.com', '33/33/2019', 1, NULL, NULL),
(3, 'ricardo', 'Andrade', 'ricardosantos@gmail.com', '12/12/2000', 2, NULL, NULL),
(4, 'Guilherme', 'Douglas', 'douglas@outlook.com', '12/12/2000', 2, NULL, NULL),
(5, 'Caroline', 'Athayde', 'carol@email.com', '01/01/1990', 1, 'carol.athayde', 'a9a0198010a6073db96434f6cc5f22a8'),
(6, 'Gabriella', 'Santos', 'gabriellasantos@rssolucoesconsultoria.com', '06/11/1985', 3, 'gabriella.santos', '45650b6f60fafe3b2544852ecc5848d0'),
(7, 'Jonatas', 'Gama Souza', 'jonatasgama@rssolucoesconsultoria.com', '06/11/1985', 3, 'jonatas.gama', '3f83164cab55dccb72d71c7d8fcbef60'),
(9, 'Carlos', 'Cunha', 'carlos.cunha@email.com', '21/05/2019', 1, NULL, NULL),
(10, 'Rosangela', 'Santos', 'email@email.com', '25/05/1995', 1, 'rosangela.santos', '600209109925e369be256b3b88590a8e'),
(11, 'Victor', 'Targaryen', 'email@site.co.br.rio', '22/05/1990', 1, 'victor.targaryen', '82233bce59652cf3cc0eb7a03f3109d1'),
(12, 'Rosangela', 'Gama', 'rgama@email.com', '15/02/1980', 1, 'rosangela.gama', '600209109925e369be256b3b88590a8e'),
(15, 'Carlos', 'Silva', 'email@email.com.pt', '12/02/1985', 1, 'carlos.silva', '8fe918632d847e8ea3ebffbd47bd8ca9');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_gerente`
--

CREATE TABLE `tb_gerente` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `dt_nascimento` varchar(45) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_gerente`
--

INSERT INTO `tb_gerente` (`id_usuario`, `nome`, `sobrenome`, `email`, `dt_nascimento`, `usuario`, `senha`) VALUES
(1, 'Jonatas', 'Gama Souza', 'jonatasgama@rssolucoesconsultoria.com', '27/09/1990', 'jonatas.gama.rh', '3f83164cab55dccb72d71c7d8fcbef60'),
(2, 'Gabriella', 'Santos', 'gabriellasantos@rssolucoesconsultoria.com', '06/11/1958', 'gabriella.santos.rh', '45650b6f60fafe3b2544852ecc5848d0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `status`) VALUES
(1, 'aprovado'),
(2, 'reprovado'),
(3, 'blacklist'),
(4, 'pendente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_supervisor`
--

CREATE TABLE `tb_supervisor` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `dt_nascimento` varchar(45) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_supervisor`
--

INSERT INTO `tb_supervisor` (`id_usuario`, `nome`, `sobrenome`, `email`, `dt_nascimento`, `usuario`, `senha`) VALUES
(1, 'Victor', 'Luis', 'vitor@rssolucoesconsultoria.com', '28/02/1996', 'victor.luis', 'ffc150a160d37e92012c196b6af4160d'),
(2, 'Amanda', 'Grazielle', 'amandagrazielle@rssolucoesconsultoria.com', '11/09/1990', 'amanda.grazielle.rh', '6209804952225ab3d14348307b5a4a27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_auxiliar`
--
ALTER TABLE `tb_auxiliar`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `tb_avaliacao`
--
ALTER TABLE `tb_avaliacao`
  ADD PRIMARY KEY (`id_avaliacao`);

--
-- Indexes for table `tb_candidato`
--
ALTER TABLE `tb_candidato`
  ADD PRIMARY KEY (`id_funcionario`),
  ADD UNIQUE KEY `telefone_UNIQUE` (`telefone`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_func_idx` (`id_curriculo`),
  ADD KEY `fk_avalicao_idx` (`id_avaliacao`),
  ADD KEY `fk_status_idx` (`id_status`),
  ADD KEY `fk_cargo_id` (`cargo_id`);

--
-- Indexes for table `tb_cargo`
--
ALTER TABLE `tb_cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indexes for table `tb_curriculo`
--
ALTER TABLE `tb_curriculo`
  ADD PRIMARY KEY (`id_curriculo`);

--
-- Indexes for table `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indexes for table `tb_gerente`
--
ALTER TABLE `tb_gerente`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_supervisor`
--
ALTER TABLE `tb_supervisor`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_auxiliar`
--
ALTER TABLE `tb_auxiliar`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_avaliacao`
--
ALTER TABLE `tb_avaliacao`
  MODIFY `id_avaliacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_candidato`
--
ALTER TABLE `tb_candidato`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `tb_cargo`
--
ALTER TABLE `tb_cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_curriculo`
--
ALTER TABLE `tb_curriculo`
  MODIFY `id_curriculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_gerente`
--
ALTER TABLE `tb_gerente`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_supervisor`
--
ALTER TABLE `tb_supervisor`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_candidato`
--
ALTER TABLE `tb_candidato`
  ADD CONSTRAINT `fk_avalicao` FOREIGN KEY (`id_avaliacao`) REFERENCES `tb_avaliacao` (`id_avaliacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cargo_id` FOREIGN KEY (`cargo_id`) REFERENCES `tb_cargo` (`id_cargo`),
  ADD CONSTRAINT `fk_curriculo` FOREIGN KEY (`id_curriculo`) REFERENCES `tb_curriculo` (`id_curriculo`),
  ADD CONSTRAINT `fk_status` FOREIGN KEY (`id_status`) REFERENCES `tb_status` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
