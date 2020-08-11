/*
 * Faça um algoritmo que leia o código, o preço atual e o departamento de um produto,
 * calcule e mostre o preço novo, sabendo que para o departamento 1 o aumento foi de 5,0% e
 * para o departamento 2 o aumento foi de 7,4%.
 * 
 * */

package br.com.exercicios.estruturadecisao;

import java.util.Scanner;

public class Exercicio10 {
	public static void main(String[] args) {
		double precoProduto = 0.0;
		int codigoProduto = 0;
		int departamento = 0;
		double precoFinalProduto = 0.0;
		
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Informe o codigo do produto: ");
		codigoProduto = sc.nextInt();
		System.out.println("Informe o preco do produto: ");
		precoProduto = sc.nextDouble();
		System.out.println("Informe o departamento do produto: ");
		departamento = sc.nextInt();
		
		switch(departamento) {
			case 1:
				precoFinalProduto = (precoProduto * 0.05) + precoProduto;
				System.out.println("Preço final do produto: " + precoFinalProduto);
				break;
			case 2:
				precoFinalProduto = (precoProduto * 0.074) + precoProduto;
				System.out.println("Preço final do produto: " + precoFinalProduto);
				break;
			default:
				System.out.println("Departamento invalido!");
		}
		
		sc.close();
	}
}