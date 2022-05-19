package fr.vankocko.toolbarmenu

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.Menu
import android.view.MenuItem
import android.widget.Toast

class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)
    }

    override fun onCreateOptionsMenu(menu: Menu?): Boolean {
        menuInflater.inflate(R.menu.app_bar_menu,menu)
        return true
        //return super.onCreateOptionsMenu(menu)
    }

    override fun onOptionsItemSelected(item: MenuItem): Boolean {
        when(item.itemId){
                 R.id.miAddContact->Toast.makeText(this,"You clicked on Add Contact",Toast.LENGTH_LONG).show()
                 R.id.miFavorites->Toast.makeText(this,"You clicked on Favorites",Toast.LENGTH_LONG).show()
                 R.id.miSettings->Toast.makeText(this,"You clicked on Setting",Toast.LENGTH_LONG).show()
                 R.id.miClose->finish()
                 R.id.miFeedback->Toast.makeText(this,"You clicked on Feedback",Toast.LENGTH_LONG).show()
        }
        return true
    }
}