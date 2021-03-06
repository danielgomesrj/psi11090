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
/****** Object:  Table [dbo].[PRODUTO]    Script Date: 08/02/2021 02:10:43 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[PRODUTO](
	[CODIGOPRODUTO] [int] IDENTITY(1,1) NOT NULL,
	[NOME] [varchar](255) NULL,
	[DESCRICAO] [varchar](255) NULL,
	[CATEGORIA] [varchar](255) NULL,
	[ATRIBUTO1] [varchar](255) NULL,
	[ATRIBUTO2] [varchar](255) NULL,
	[ATRIBUTO3] [varchar](255) NULL,
	[ATRIBUTO4] [varchar](255) NULL,
PRIMARY KEY CLUSTERED 
(
	[CODIGOPRODUTO] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET IDENTITY_INSERT [dbo].[PRODUTO] ON 

INSERT [dbo].[PRODUTO] ([CODIGOPRODUTO], [NOME], [DESCRICAO], [CATEGORIA], [ATRIBUTO1], [ATRIBUTO2], [ATRIBUTO3], [ATRIBUTO4]) VALUES (1, N'Auxílio Emergencial', N'Benefício concedido à população de baixa renda com o objetivo de mitigar os impactos econômicos causados pela pandemia de COVID-19.', N'Social', N'Necessário ser maior de 18 anos', N'Não ter emprego formal', N'Renda familiar total seja de até R$ 3.135,00', N'Não pode estar recebendo Seguro_Desemprego')
INSERT [dbo].[PRODUTO] ([CODIGOPRODUTO], [NOME], [DESCRICAO], [CATEGORIA], [ATRIBUTO1], [ATRIBUTO2], [ATRIBUTO3], [ATRIBUTO4]) VALUES (2, N'Cartão de Crédito', N'Produto que permite ao cliente realizar pagamentos por meio eletrônico com limite de crédito pré-definido e com autorização mediante senha.', N'Comercial', N'Até 40 dias para pagar as compras', N'Condições especiais nas Taxa de Juros ', N'Atendimento por telefone 24 horas por dia', N'Consulta informações pelo APP')
INSERT [dbo].[PRODUTO] ([CODIGOPRODUTO], [NOME], [DESCRICAO], [CATEGORIA], [ATRIBUTO1], [ATRIBUTO2], [ATRIBUTO3], [ATRIBUTO4]) VALUES (3, N'Crédito Habitacional', N'Produto que permite ao cliente tomar empréstimo para financiar a casa própria', N'Comercial', N'Financiamento em até 420 meses ', N'As melhores condições de Taxa de Juros do mercado ', N'App exclusivo para assuntos sobre crédito habitacional', N'Uso do FGTS na entrada')
SET IDENTITY_INSERT [dbo].[PRODUTO] OFF
