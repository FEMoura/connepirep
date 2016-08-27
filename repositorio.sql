-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27-Ago-2016 às 05:48
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repositorio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `extensao`
--

CREATE TABLE `extensao` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `resumo` text NOT NULL,
  `ano` year(4) NOT NULL,
  `autores` varchar(255) NOT NULL,
  `coordenador` varchar(255) NOT NULL,
  `unidadeExecutora` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `dataInicio` date NOT NULL,
  `dataTermino` date NOT NULL,
  `arquivo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pesquisa`
--

CREATE TABLE `pesquisa` (
  `arquivo` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `resumo` text NOT NULL,
  `ano` year(4) NOT NULL,
  `autores` text NOT NULL,
  `orientador` varchar(255) NOT NULL,
  `outorga` varchar(255) NOT NULL,
  `modalidade` varchar(255) NOT NULL,
  `financiamento` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacao`
--

CREATE TABLE `publicacao` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `resumo` text NOT NULL,
  `ano` year(4) NOT NULL,
  `autores` text NOT NULL,
  `ies` varchar(255) NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  `aprovado` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `publicacao`
--

INSERT INTO `publicacao` (`id`, `titulo`, `resumo`, `ano`, `autores`, `ies`, `arquivo`, `aprovado`, `area`) VALUES
(3, 'PRODUÇÃO AGROECOLÓGICA COMO ALTERNATIVA DE  DESENVOLVIMENTO SUSTENTÁVEL: O CASO DE ENGENHO VELH O,  JOÃO PESSOA – PB ', 'O presente trabalho visa descrever as atividades de\r\nsenvolvidas na capacitação e implantação de manejo \r\nem \r\nsistemas  de  produção  e  cultivo  de  hortaliças  e  frut\r\nas,  com  base  na  agricultura  orgânica.  As  ações  vem \r\nbeneficiando os agricultores da comunidade, em João\r\n Pessoa – PB e estão pautadas no resgate e valoriza\r\nção \r\nda cultura local, promovendo o plantio de alimentos\r\n orgânicos, aumentando a auto-estima do grupo. Esse\r\nestudo faz parte do conjunto de ações comunitárias \r\ndo projeto: APOIO AO EMPREENDEDORISMO EM \r\nCOMUNIDADES  DE  BAIXA  RENDA  PARA  INCLUSAO  DE  JOVENS \r\nE  SEUS  FAMILIARES  NA \r\nCADEIA PRODUTIVA DO TURISMO RURAL SUSTENTÁVEl, fina\r\nnciado pelo Programa das Nações \r\nUnidas  -  PNUD  e  Ministério  do  Desenvolvimento  Socia\r\nl  para  o  Combate  a  Fome  -  MDS.  Possui  como \r\nproponente  o  CEFET-PB,  executor  das  ações  em  parcer\r\nia  com  a  OSCIP  Escola  Viva  Olho  do  Tempo  - \r\nEVOT,  com  a  Fundação  de  Educação  Tecnológica  e  Cult\r\nural  da  Paraíba  -  FUNETEC  e  diversos \r\ncolaboradores locais. O objetivo da nossa pesquisa \r\nconsiste em estabelecer uma linha de construção teó\r\nrica-\r\nprática, com uma abordagem mais profunda sobre o us\r\no do solo e suas possibilidades de manejo sustentáv\r\nel \r\npara  a  região.  Adotou-se  a  metodologia  de  Estudo  de\r\n  Campo  onde  busca-se  motivar  a  comunidade  com \r\ndiscussões  sobre  a  problemática  em  suas  lavouras,  t\r\nrabalha-se  a  caracterização  físico-química  do  solo \r\ne \r\noutros  recursos  naturais,  bem  como  o  levantamento  d\r\nas  dificuldades  operacionais,  relatadas  pelos \r\nagricultores.  Esse  trabalho  tem  consistido  em  acomp\r\nanhar  e  por  em  prática  as  alternativas  de  uso  de \r\ndefensivos e fertilizantes naturais para segurança \r\nde agricultura familiar saudável. Identifica-se \r\nin loco \r\nas \r\npragas  mais  comuns  nas  plantações,  prepara-se  adequ\r\nadamente  as  soluções  biodefensivas  no  controle  de \r\npragas  adotando-se  técnicas  simples  e  de  fácil  aqui\r\nsição  para  a  própria  comunidade,  trabalhando  tanto \r\na \r\nrecuperação de plantios danificados como também a p\r\nrodução de mudas. Desta forma busca-se melhorar a \r\nqualidade dos produtos gerados, da economia e da qu\r\nestão ecológica local, pela agricultura familiar.  ', 2007, 'Tânia Maria de ANDRADE, Vicente Félix da SILVA, Hermes de Oliveira MACHADO  FILHO, Polena do Nascimento PEIXOTO, Juliane  Morais da SILVA ', 'IFPB', 'files/1466451285.pdf', 'S', 'Ciências Agrárias'),
(4, 'GRUPO DE TEATRO DO CEFET-PB:  UMA TRIBO NA ESCOLA ', 'O presente trabalho defende a aprendizagem do conheci\r\nmento como sendo um processo múltiplo e diverso, \r\nno  qual  se  inserem  a  emoção,  a  ludicidade,  o  corpo,  as  relações  e  os  contatos  entre  os  pequenos  grupos  \r\nsociais.  Nosso  referencial  teórico  encontra  suporte\r\n  em  Maffesoli  que  põe  em  discussão  a  multiplicação,  na  \r\ncontemporaneidade, dos peque\r\nnos grupos ou tribos urbanas, o qual caracteriza a relação entre função e papel \r\nsocial.  Comentamos  a  construção  do  trabalho  cên\r\nico  na  escola  e  a  presença  do  corpo  no  processo  de  \r\naprendizagem do conhecimento, fundamentados em Assm\r\nan e Gonçalves. Apresento\r\n, a partir das discussões \r\nde  Maffesoli,  o  grupo  de  teatro  de  Centro  Fede\r\nral  de  Educação  Tecnológica  da  Paraíba  –  CEFET/PB  \r\nenquanto tribo, destacando experiências em sala de aula\r\n e uma relação de montagens cênicas realizadas pelo \r\ncitado grupo. Discuto o valor social da vestimenta a\r\nliada a Larossa e concluo que a escola deveria perceber\r\nessas discussões com o intuito de amenizar a exclusão social. ', 2008, 'PALHANO,  Palmira Rodrigues. ', 'IFPB', 'files/1466515353.pdf', 'S', 'Artes'),
(5, 'MobPAPER: MOBILIÁRIO COM TUBOS DE PAPEL APLICADO AO DESIGN DE INTERIORES ', 'Este  artigo  apresenta  as  discussões  iniciais  da  pes\r\nquisa  de  iniciação  cientifica  “MobPAPER:  mobiliário\r\nsustentável  com  tubos  de  papelão”  (PIBICT  FAPEAL  20\r\n08-2009/DPP/CEFET-AL),  desenvolvida  no \r\nNúcleo  de  Pesquisa  em  Design  – NPDesign do CEFET-AL\r\n, na linha de pesquisa Produtos Sustentáveis do \r\nGrupo  de  Pesquisa  Design  e  Estudos  Interdisciplinar\r\nes  (CNPq/CEFET-AL).  O  projeto  conceitual  do \r\nMobPAPER  baseia-se  na  aplicação  da  metodologia  de  m\r\nodularização  MobPET  (2007-2008)  em  novo \r\nmaterial: tubos de papelão de peças de tecidos pós-\r\nconsumo. Tomando-se esse método como guia condutor,\r\no   MobPAPER   projetará   e   executará   peça   experimental \r\nde   mobiliário   em   papelão   para   ambientes \r\nresidenciais  e/ou  comerciais,  voltado  à  função  sent\r\nar,  cujo  partido  conceptivo  e  primeiros  esboços  são\r\nanalisados  e  comentados  nesse  texto.  Como  resultado\r\ns,  a  pesquisa  contribuirá  para  a  redução  do  lixo \r\nproduzido  pelo  descarte  inadequado  da  matéria-prima\r\n  selecionada  e  para  a  reutilização  e  reciclagem  do \r\nmaterial,  atribuindo-lhe  transformações  para  uma  se\r\ngunda  funcionalidade.  Para  execução  do  protótipo \r\n(etapa final), os procedimentos metodológicos são: \r\nlevantamento e análise de dados e revisão bibliográ\r\nfica; \r\nanálise e adaptação da metodologia em módulos do Mo\r\nbPET; projetação e execução da peça.', 2008, 'Áurea RAPÔSO; Ingrid FERREIRA; Kátia CASSIMIRO; Ana Carolina  SARMENTO', 'IFAL', 'files/1466515703.pdf', 'S', 'Artes'),
(6, 'CARACTERI ZAÇÃO ECOLÓGICA  DA COMUNIDADE FITOPLANCTÔNICA  DO RIO POTI  NA CIDADE  DE TERESINA  NO ANO DE 2006', 'Os   organi\r\nsmos   fitoplanctôn\r\nicos   são   indicadores\r\n  das   condiçõ\r\nes   ambientais\r\n  da   água,   responde\r\nm   as\r\nmodificações\r\n ocorr\r\nidas no meio,\r\n indicando\r\n a sua qualidade. São os principa\r\nis produto\r\nres de oxigênio através\r\nda fotossín\r\ntese e constituem\r\n a base da cadeia alimentar\r\n dos corpos d’água.\r\n O objetivo desta pesqu\r\nisa foi\r\ncaracterizar ecolog\r\nicamente a comunidade\r\n fitoplanctôn\r\nica do Rio Poti. A pesqu\r\nisa foi realizada num ponto\r\n à\r\nmargem direita do r\r\nio, aproxim\r\nadamente a 50 m\r\n da ETE\r\n Leste (E\r\nstação d\r\ne Trat\r\namento\r\n de Esgoto)\r\n. Real\r\nizou-\r\nse seis coletas, entre maio\r\n e dezembro\r\n de 2006,\r\n utilizando-s\r\ne rede de plânc\r\nton com 38μm\r\n de abertura de\r\nmalha, o material\r\n foi analisado\r\n no labora\r\ntório de saneam\r\nento do CEFET-PI.\r\n As amostras\r\n foram\r\n conservadas\r\nem frasco\r\ns de vidro e fixadas com lugol\r\n acético a 4%. Foram\r\n realizadas análises físico-qu\r\nímicas.\r\n Para a\r\nidentificação dos organ\r\nismos foram confec\r\ncionada\r\ns lâminas\r\n semi-perm\r\nanentes\r\n observadas\r\n no microscópio\r\nóptico, registrados\r\n em fotos. Os indivíduo\r\ns foram\r\n identificados\r\n com a utilização de bibliogra\r\nfia especí\r\nfica\r\nconsid\r\nerando-s\r\ne as estruturas morfológicas\r\n das células. Foram\r\n encontr\r\nados 23 táxons\r\n represen\r\ntantes de 04\r\nDivisõe\r\ns: 4 Cyanophytas, 5 Euglenoph\r\nytas, 4 Crysophytas e 10 Chloroph\r\nytas.   Os parâmetros\r\n físico-\r\nquím\r\nicos avaliados mostrara\r\nm a presenç\r\na dos compostos\r\n de nitrogênio revelando\r\n que este ecossistema\r\napresenta \r\nalterações no \r\nseu estado t\r\nrófico a baixa diversidade \r\ne variedade de \r\nindivíduos\r\n.', 2007, 'Bruna de Freitas  IWATA; Flôr  de Maria  Mendes CÂMARA', 'IFPI', 'files/1466627117.pdf', 'S', 'Ciências Biológicas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `codUsuario` int(11) NOT NULL DEFAULT '0',
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codUsuario`, `login`, `senha`, `nome`) VALUES
(0, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Lucas Gabriel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `extensao`
--
ALTER TABLE `extensao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesquisa`
--
ALTER TABLE `pesquisa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publicacao`
--
ALTER TABLE `publicacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `extensao`
--
ALTER TABLE `extensao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pesquisa`
--
ALTER TABLE `pesquisa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `publicacao`
--
ALTER TABLE `publicacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
