package fr.vankocko.alertdialog

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Toast
import androidx.appcompat.app.AlertDialog
import kotlinx.android.synthetic.main.activity_main.*

class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)
        /**
         *   Creation of  dialog
         */
        val addContactDialog = AlertDialog.Builder(this)
            .setTitle("Add contact")
            .setMessage("Do you want to add Mr. Poop to your contacts list? ")
            .setIcon(R.drawable.ic_add_contact)
            .setPositiveButton("Yes") { _, _->
                Toast.makeText(this,"You add Mr. Poop to your contact list", Toast.LENGTH_LONG).show()
            }
            .setNegativeButton("No") { _, _->
                Toast.makeText(this,"You didn't add Mr. Poop to your contact list", Toast.LENGTH_LONG).show()
            }.create()

        /**
         *   Call button
         */
        btnDialog1.setOnClickListener {
               addContactDialog.show()
        }
        /**
         *   Single Choice Dialog
         */
        val options = arrayOf("First Item", "Second Item","Third Item")
        val singleChoiceDialog = AlertDialog.Builder(this)
            .setTitle("Choose one of thesse options")
            .setSingleChoiceItems(options,0) {
                 _,i->
                Toast.makeText(this,"You clicked on ${options[i]}", Toast.LENGTH_LONG).show()
            }
            .setPositiveButton("Accept") { _, _->
                Toast.makeText(this,"You accepted the SingleChoiceDialog", Toast.LENGTH_LONG).show()
            }
            .setNegativeButton("Decline") { _, _->
                Toast.makeText(this,"You declined the SingleChoiceDialog", Toast.LENGTH_LONG).show()
            }.create()

        /**
         *  Call button
         */
        btnDialog2.setOnClickListener{
             singleChoiceDialog.show()
        }
    }
}