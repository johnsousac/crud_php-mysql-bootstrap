/*
 * Faça um algoritmo que receba o valor do salário mínimo, o salário do funcionário, 
 * calcule e mostre a quantidade de salários mínimos que esse funcionário recebe.
 * 
 * */

package br.com.exercicios.estruturasequencial;

import java.util.Scanner;

public class Exercicio5 {
	public static void main(String[] args) {
		double salarioMinimo = 0.0;
		double salarioFuncionario = 0.0;
		double quantidadeSalarioMinimo = 0.0;
		
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Informe o salario minimo: ");
		salarioMinimo = sc.nextDouble();
		System.out.println("Informe o salario do funcionario: ");
		salarioFuncionario = sc.nextDouble();
		
		quantidadeSalarioMinimo = salarioFuncionario / salarioMinimo;
		
		System.out.println("Quantidade de salarios minimos que o funcionario recebe: " + quantidadeSalarioMinimo);
		
		sc.close();
	}
}