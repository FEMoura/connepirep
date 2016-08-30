-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30-Ago-2016 às 17:28
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
  `ano` year(4) NOT NULL,
  `autores` text NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `ies` varchar(255) NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  `aprovado` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `publicacao`
--

INSERT INTO `publicacao` (`id`, `titulo`, `ano`, `autores`, `keywords`, `ies`, `arquivo`, `aprovado`, `area`) VALUES
(3, 'PRODUÇÃO AGROECOLÓGICA COMO ALTERNATIVA DE  DESENVOLVIMENTO SUSTENTÁVEL: O CASO DE ENGENHO VELH O,  JOÃO PESSOA – PB ', 2007, 'Tânia Maria de ANDRADE, Vicente Félix da SILVA, Hermes de Oliveira MACHADO  FILHO, Polena do Nascimento PEIXOTO, Juliane  Morais da SILVA ', '', 'IFPB', 'files/1466451285.pdf', 'S', 'Ciências Agrárias'),
(4, 'GRUPO DE TEATRO DO CEFET-PB:  UMA TRIBO NA ESCOLA ', 2008, 'PALHANO,  Palmira Rodrigues. ', '', 'IFPB', 'files/1466515353.pdf', 'S', 'Artes'),
(5, 'MobPAPER: MOBILIÁRIO COM TUBOS DE PAPEL APLICADO AO DESIGN DE INTERIORES ', 2008, 'Áurea RAPÔSO; Ingrid FERREIRA; Kátia CASSIMIRO; Ana Carolina  SARMENTO', '', 'IFAL', 'files/1466515703.pdf', 'S', 'Artes'),
(6, 'CARACTERI ZAÇÃO ECOLÓGICA  DA COMUNIDADE FITOPLANCTÔNICA  DO RIO POTI  NA CIDADE  DE TERESINA  NO ANO DE 2006', 2007, 'Bruna de Freitas  IWATA; Flôr  de Maria  Mendes CÂMARA', '', 'IFPI', 'files/1466627117.pdf', 'S', 'Ciências Biológicas'),
(7, 'EFEITOS DO EXTRATO DA PRÓPOLIS PIAUIENSE NA GENOTOXICIDADE INDUZIDA PELA CICLOFOSFAMIDA EM MEDULA ÓSSEA DE CAMUNDONGOS', 2006, 'M. M. de O. Lima; A. de S. Leite; T. de J. A. S. Andrade; N. de O. Alvez; A.M.G. Citó; A.A.C.M Calvacante;', 'Própolis, antimutagêncio, antioxidante, ciclofosfamida, micronúcleos.', 'IFPI', 'files/2006agro1.pdf', 'S', 'Ciências Agrárias'),
(8, 'EFEITO DA FERTIRRIGAÇÃO COM EFLUENTES DOMÉSTICOS NAS PROPRIEDADES DO SOLO E DESENVOLVIMENTO DE LEGUMINOSAS ARBÓREAS PARA RECUPERAÇÃO DE ÁREAS DEGRADADAS', 2006, 'F.G. Carvalho; \r\nH.N.S. Melo; \r\nJ.L.S. Melo', 'Reuso agrícola de efluentes, recuperação de área degradadas, propriedades do solo.', 'IFRN', 'files/2006agro2.pdf', 'S', 'Ciências Agrárias'),
(9, 'A IMPORTÂNCIA DA ANÁLISE FITOQUÍMICA NA BUSCA DE NOVOS INIBIDORES DA ENZIMA ACETILCOLINESTERAZE (AChE) COM PLANTAS MEDICINAIS', 2006, 'D. C. Silva; \r\nC. M. Feitosa;\r\nF. J. B. Santos;\r\nA. A. C. M. Calvacante;', 'Análise fitoquímica, plantas medicinais, Mal de Alzheimer, inibidores, acetilcolinesteraze (AChE), fitoterápicos.', 'IFPI', 'files/2006agro3.pdf', 'S', 'Ciências Agrárias'),
(10, 'ESTUDO COMPARATIVO DA QUALIDADE DE PÓLEN APÍCOLA FRESCO, RECÉM PROCESSADO, NÃO PROCESSADO E ARMAZENADO EM FREEZER E POLÉN DE MARCA COMERCIAL ATRAVÉS DE ANÁLISES FISICO-QUÍMCAS', 2006, 'J. G. Ribeiro;\r\nR .A. Silva;', 'Pólen, qualidade, condições higienico-sanitárias.', 'IFPI', 'files/2006agro4.pdf', 'S', 'Ciências Agrárias'),
(11, 'FITASE EM RAÇÕES PARA SUÍNOS EM CRESCIMENTO: DESEMPENHO E TEOR DE MINERAIS NOS OSSOS', 2006, 'H. O. SIlva;\r\nE. T. Fialho; \r\nN. A. Shoulten;\r\nW. G. Santos;', 'Enzima, desempenho, poluição, degetos.', 'IFS', 'files/2006agro5.pdf', 'S', 'Ciências Agrárias'),
(12, 'EFEITO DE MANEJO ORGÂNICO E CONVENCIONAL SOBRE A PRODUÇÃO E ÓLEO ESSENCIAL DE CAPIM-LIMÃO (CYMBOPOGON CITRATUS (DC) STAPF)', 2006, 'A. D. Santos;', '', 'IFS', 'files/2006agro6.pdf', 'S', 'Ciências Agrárias'),
(13, 'AGRICULTURA ORGÂNICA E GESTÃO AMBIENTAL: UMA ANÁLISE DOS FATORES QUE INTERFEREM NA DECISÃO DE COMPRA DOS PRODUTOS ORGÂNICOS NA CIDADE DE TERESINA', 2006, 'E. M. F. Cunha;\r\nM. A. C. M. Teixeira, Msc;\r\nV. C. B. Vieira, Dra;', 'Agricultura orgânica, sutentabilidade, consumidores, produtos orgânicos.', 'IFPI', 'files/2006agro7.pdf', 'S', 'Ciências Agrárias'),
(14, 'ANÁLISE ECONÔMICA DOS SISTEMAS DE PRODUÇÃO DE MACAXEIRA NA CIDADE DE PALMAS, TOCANTINS.', 2006, 'G. B. Salve;\r\nT. S. Fernandes;\r\nR. R. M. Moura;', 'Economia agrícola, análise econômica, produção de macaxeira.', 'IFTO', 'files/2006agro8.pdf', 'S', 'Ciências Agrárias'),
(15, 'INVENTÁRIO DE VERTEBRADOS TERRESTRES (HERPETOFAUNA) DOS FRAGMENTOS DE VEGETAÇÃO DE SERRADOS E ECOSSISTEMAS ECOTONAIS DO SUL DO PIAUÍ', 2006, 'Lima, R. N;\r\nCruz, W. P;', 'Herpetofauna, cerrado, Piauí, fragmentos florestais.', 'IFPI', 'files/2006agro9.pdf', 'S', 'Ciências Agrárias'),
(16, 'OBTENÇÃO DE CONCRETO DE ALTO DESEMPENHO COM MATERIAL DA REGIÃO DE PALMAS.', 2006, 'O. F. Araújo;\r\nO. D. A. Junior;\r\nF. L. Martins;\r\nP. H. B. Costa;', 'Concreto de alto desempenho (CAD), resistência do concreto, agregado graúdo, agregado miúdo.', 'IFTO', 'files/2006eng1.pdf', 'S', 'Engenharias'),
(17, 'CONHECIMENTOS E USO DE CRITÉRIOS SUSTENTÁVEIS NA ARQUITETURA POR PARTE DOS ALUNOS CONCLUINTES DE UMA UNIVERSIDADE PÚBLICA DE NATAL', 2006, 'Suerda Campos da Costa;\r\nLuciana Lopes Xavier;', 'Meio ambiente, desenvolvimento sustentável, arquitetura sustentável e critérios de sustentabilidade.', 'IFRN', 'files/2006eng2.pdf', 'S', 'Engenharias'),
(18, 'CPUs PARA EXECUÇÃO DE FORRO DE GESSO: UMA ANÁLISE QUANTITATIVA DOS INSUMOS E DO CUSTO TOTAL', 2006, 'F. L. Oliveira;\r\nS. L. Oliveira;\r\nM. A. Padilha Júnior;\r\nN. M. C. Araújo;', 'Construção civil, composição de preço unitário, forro de gesso.', 'IFPB', 'files/2006eng3.pdf', 'S', 'Engenharias'),
(19, 'TEOR CRÍTICO DE CLORETOS PARA DESPASSIVAÇÃO DE ARMADURAS - INFLUÊNCIA DO TIPO DE CIMENTO E DA DOSAGEM DO CONCRETO', 2006, 'A. L. C. Silva;\r\nM. A. Padilha Júnior;\r\nG. R. Meira;', 'Concreto, cloreto, corrosão, potencial de corrosão, teor crítico de cloretos.', 'IFPB', 'files/2006eng4.pdf', 'S', 'Engenharias'),
(20, 'ESTUDO COMPARATIVO DE BLOCOS DE CERÂMICA PARA ALVENARIA PRODUZIDOS NO ESTADO DO RIO GRANDE DO NORTE', 2006, 'DANTAS, M. A. ;\r\nGalvão,S.B. ; \r\nFELIPE, R. C. T. S.', 'Estudo comparativo, propiedades, blocos de cerâmica.', 'IFPI', 'files/2006eng5.pdf', 'S', 'Engenharias'),
(21, 'DESIGN DE INTERIORES EM HABITAÇÕES POPULARES: ESTUDO DE CASO EM HABITAÇÕES DO CONJUNTO MANGABEIRA VII', 2006, 'Fabrício Gonçalves Faustino;\r\nGillayne Costa Silva;\r\nIsis Elisabete Albuquerque Almeida;\r\nJosé Batista do Nascimento Júnior;', 'Design, habitações, dimensionamentos.', 'IFPB', 'files/2006eng6.pdf', 'S', 'Engenharias'),
(22, 'TERESINA: CLIMA E PLANEJAMENTO URBANO', 2006, 'A. M. D. Rodrigues;\r\nI. M. Silva;\r\nL. M. P. Ramos;\r\nM. A. C. M. Teixeira;', 'Terisina, condições climáticas, conforto térmico e planejamento urbano.', 'IFPI', 'files/2006eng7.pdf', 'S', 'Engenharias'),
(23, 'PROPOSTA PARA MELHORIA DA QUALIDADE E PRODUTIVIDADE DE EMPRESAS CONSTRUTORAS DO SUBSETOR DE EDIFICAÇÕES EM MANAUS', 2006, 'Antonio Venâncio Castelo Branco;', 'Construção civil, edificações, qualidade e produtividade.', 'IFAM', 'files/2006eng8.pdf', 'S', 'Engenharias'),
(24, 'CASA VITAL, UMA CONTRIBUIÇÃO PARA SOLUCIONAR O PROBLEMA HABITACIONAL DO ESTADO DA PARAÍBA', 2006, 'Thiego Barros de Almeida Brandão;\r\nLúcia Helena Aires Martins;\r\nJosé Batista do Nascimento Júnior;', 'Casa vital, construção sustentável, materiais alternativos, ecodesign, ecologia, consciência ambiental.', 'IFPB', 'files/2006eng9.pdf', 'S', 'Engenharias'),
(25, 'MAPEAMENTO DE RISCO SIMPLIFICADO DE DESLIZAMENTO DE ENCOSTAS NO MUNICÍPIO DE TIBAU DO SUL - RN', 2006, 'D. S. S. Moura;\r\nR. N. F. Severo;\r\nO. F. S. Júnior;\r\nO. F. Neto;\r\nA. C. Pereira;\r\nE. V. Borja;\r\nM. F. D. Araújo;\r\nA. E. Silva;', 'Mapeamento de risco, formação barreiras, deslizamento.', 'IFRN', 'files/2006eng10.pdf', 'S', 'Engenharias'),
(26, 'RAZÕES QUE IMPOSSIBILITAM O EMPREGO DAS ESTRUTURAS DE CONCRETO PRÉ-MOLDADO NAS EDIFICAÇÕES DE JOÃO PESSOA E AS EXPECTATIVAS DO SEU USO ABRANGENTE', 2006, 'E. C. Teixeira; L. S. Veigas;', 'Concreto pré-moldado, industrializações das construções.', 'IFPB', 'files/2006eng11.pdf', 'S', 'Engenharias'),
(27, 'PROCESSO PRODUTIVO DE REVESTIMENTO DE GESSO: ANÁLISE E ESTIMATIVA DE GERAÇÃO DE RESÍDUOS', 2006, 'M. S. M. Alves; M. V. O. Rocha; E. V. Borja;', 'Gesso, processo produtivo, resíduo de gesso.', 'IFRN', 'files/2006eng12.pdf', 'S', 'Engenharias'),
(28, 'UM SISTEMA PRODUTIVO PARA PRÉ-FABRICADOS PARA HABITAÇÃO', 2006, 'K. C. Gomes; D. Carvalho;', 'Pré-moldados, habitação popular, sistema construtivo.', 'IFPB', 'files/2006eng13.pdf', 'S', 'Engenharias'),
(29, 'CONTROLE E MODELAGEM FUZZY APLICADOS AOS NÍVEIS DE ÁGUA DISPONÍVEL NO SOLO COM A FINALIDADE DE OTIMIZAR PROCESSOS DE IRRIGAÇÃO', 2006, 'Francisco Marconi Cavalcanti de Lima;\r\nSimplício Arnaudi da Silva;\r\nJames Sidney Freitas de Carvalho;', 'controle e modelagem fuzzy, fuzzy logic toolbox, água disponível, potencial matricial, irrigação automatizada, dotação hídrica.', 'IFPB', 'files/2006eng14.pdf', 'S', 'Engenharias'),
(30, 'ESTUDO PARA A IMPLEMENTAÇÃO DE PLANEJAMENTO E CONTROLE GERENCIAL EM PEQUENAS EMPRESAS CONSTRUTORAS DE EDIFICAÇÕES VERTICAIS NA CIDADE DE JOÃO PESSOA - PB.', 2006, 'M. A. Padilha Júnior;\r\nA. P. T. Medeiros;\r\nN. M. C. Araújo;', 'Construção civil, pequenas empresas, planejamento, controle gerencial.', 'IFPB', 'files/2006eng15.pdf', 'S', 'Engenharias'),
(31, 'IDENTIFICAÇÃO, AQUISIÇÃO E AVALIAÇÃO DOS PRINCIPAIS MATERIAIS E COMPONENTES UTILIZADOS PELAS EMPRESAS CONSTRUTORAS DE JOÃO PESSOA-PB', 2006, 'L. S. Viegas;\r\nN. M. C. Araújo;\r\nA. R. Meira;\r\nG. R. Meira;', 'Construção civil, avaliação de fornecedores, materiais e componentes.', 'IFPB', 'files/2006eng16.pdf', 'S', 'Engenharias'),
(32, 'PROJETO E EXECUÇÃO DE CASA ECOEFICIENTE EM CAMPINA GRANDE - PB', 2006, 'J. N. Ribeiro Filho;\r\nG. C. Silva;\r\nK. F. M. Lucena;\r\nN. H. C. Carvalho;', 'Eficiência energética, gestão de águas, tecnologias alternativas, construção.', 'IFPB', 'files/2006eng17.pdf', 'S', 'Engenharias'),
(33, 'ASTRONOMIA FUNDAMENTAL: CAPACITANDO PROFESSORES E DISSEMINANDO A ASTRONOMIA, ENQUANTO CIÊNCIA, À COMUNIDADE ESCOLAR', 2006, 'A. A. Sobrinho;\r\nD. A. S. Menezes;\r\nL. V. S. Souza;', 'Astronomia, ensino, interdisciplinaridade.', 'IFRN', 'files/2006hum1.pdf', 'S', 'Ciências Humanas');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
