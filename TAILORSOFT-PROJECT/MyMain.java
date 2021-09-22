abstract class Animal{
	abstract public animalsound(){}
	public void sleep(){
		System.out.println("zzz");
	}
}
class Pig extends Animal{
	public class animalsound(){
		System.out.println("The pig says: wee wee");
	}
}

class MyMain{
	public static void main(String[] args) {
		Pig mypig=new Pig();
		mypig.animalsound();
		mypig.sleep();
	}
}