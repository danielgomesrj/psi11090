/*    ==Parâmetros de Script==

    Versão do Servidor de Origem : SQL Server 2016 (13.0.5026)
    Edição do Mecanismo de Banco de Dados de Origem : Microsoft SQL Server Enterprise Edition
    Tipo do Mecanismo de Banco de Dados de Origem : SQL Server Autônomo

    Versão do Servidor de Destino : SQL Server 2017
    Edição de Mecanismo de Banco de Dados de Destino : Microsoft SQL Server Standard Edition
    Tipo de Mecanismo de Banco de Dados de Destino : SQL Server Autônomo
*/
USE [DB_PRODUCAO]
GO
/****** Object:  Table [dbo].[ITEM_PRODUTO]    Script Date: 08/02/2021 02:10:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[ITEM_PRODUTO](
	[CODIGOPRODUTO] [int] NULL,
	[CODIGOITEM] [int] NOT NULL,
	[NOME] [varchar](255) NULL,
	[DESCRICAO] [varchar](255) NULL,
	[CATEGORIA] [varchar](255) NULL,
	[ATRIBUTO1] [varchar](255) NULL,
	[ATRIBUTO2] [varchar](255) NULL,
	[ATRIBUTO3] [varchar](255) NULL,
	[ATRIBUTO4] [varchar](255) NULL,
PRIMARY KEY CLUSTERED 
(
	[CODIGOITEM] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
INSERT [dbo].[ITEM_PRODUTO] ([CODIGOPRODUTO], [CODIGOITEM], [NOME], [DESCRICAO], [CATEGORIA], [ATRIBUTO1], [ATRIBUTO2], [ATRIBUTO3], [ATRIBUTO4]) VALUES (1, 101, N'Pagamento da 1ª parcela', N'Informações sobre o primeiro pagamento do Auxílio emergencial', N'Social', N'Valor de R$ 600', N'Crédito em Conta', N'Nascidos em Janeiro', N'Movimentação pelo App Caixa Tem')
INSERT [dbo].[ITEM_PRODUTO] ([CODIGOPRODUTO], [CODIGOITEM], [NOME], [DESCRICAO], [CATEGORIA], [ATRIBUTO1], [ATRIBUTO2], [ATRIBUTO3], [ATRIBUTO4]) VALUES (1, 102, N'Contestação', N'Orientações sobre como contestar a não aprovação do auxílio', N'Social', N'Consulta de conta de FGTS Ativa', N'Consulta de Cadastro MEI', N'Consulta no cadastro ativo do Seguro-Desemprego', N'Preenchimento de formulário de contestação')
INSERT [dbo].[ITEM_PRODUTO] ([CODIGOPRODUTO], [CODIGOITEM], [NOME], [DESCRICAO], [CATEGORIA], [ATRIBUTO1], [ATRIBUTO2], [ATRIBUTO3], [ATRIBUTO4]) VALUES (2, 201, N'Ccontestação de pagamentos', N'Orientações sobre como contestar pagamentos não reconhecidos no cartão', N'Comercial', N'Bloqueio do cartão do cliente', N'Registro de data, hora e estabelecimento da compra', N'Reemissão de uma nova via', N'Preenchimento de formulário de contestação')
INSERT [dbo].[ITEM_PRODUTO] ([CODIGOPRODUTO], [CODIGOITEM], [NOME], [DESCRICAO], [CATEGORIA], [ATRIBUTO1], [ATRIBUTO2], [ATRIBUTO3], [ATRIBUTO4]) VALUES (2, 202, N'Programa de Pontos', N'Orientações sobre como resgatar pontos acumulados no cartão', N'Comercial', N'Variantes variantes Azul, Internacional, Gold, Mais, Único, Platinum, Grafite, Black, Infinite e Nanquim', N'Empresas parceiras:  TudoAzul, Smiles, LATAM Pass, TAP Miles&Go, In Mais e Dotz', N'Prazo de até 36 meses para o resgate', N'No  caso  de  compras  parceladas,  somente  são  computados  Pontos  sobre  o  valor  de  cada  parcela')
INSERT [dbo].[ITEM_PRODUTO] ([CODIGOPRODUTO], [CODIGOITEM], [NOME], [DESCRICAO], [CATEGORIA], [ATRIBUTO1], [ATRIBUTO2], [ATRIBUTO3], [ATRIBUTO4]) VALUES (3, 301, N'Minha Casa Minha Vida', N'Informações sobre a modalidade subsidiada pelo governo federal', N'Comercial', N'Famílias com renda de até R$ 1.800,00', N'Não ser proprietário, cessionário ou promitente comprador de imóvel residencial', N'Pagamento de parte do valor da entrada (subsídio)', N'Descontos no seguro do financiamento imobiliário')
INSERT [dbo].[ITEM_PRODUTO] ([CODIGOPRODUTO], [CODIGOITEM], [NOME], [DESCRICAO], [CATEGORIA], [ATRIBUTO1], [ATRIBUTO2], [ATRIBUTO3], [ATRIBUTO4]) VALUES (3, 302, N'Serviços', N'Serviços para quem já possui o crédito habitacional', N'Comercial', N'Emissão de boleto através do site ou App', N'Amortização do financiamento', N'Pausa Emergencial', N'Débito automático em conta')
ALTER TABLE [dbo].[ITEM_PRODUTO]  WITH CHECK ADD FOREIGN KEY([CODIGOPRODUTO])
REFERENCES [dbo].[PRODUTO] ([CODIGOPRODUTO])
GO
