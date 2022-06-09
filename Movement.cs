using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Movement : MonoBehaviour
{ 

    Rigidbody2D body;

    float horizontal;
    float vertical;
    float moveLimiter = 0.7f;
    [SerializeField] float rotationSpeed;
    

    public float runSpeed = 10.0f;

    void Start ()
    {
        body = GetComponent<Rigidbody2D>(); 
    }

    void Update ()
    {
        horizontal = Input.GetAxisRaw("Horizontal");
        vertical = Input.GetAxisRaw("Vertical"); 

        Vector2 movmentDirection = new Vector2(Input.GetAxis("Horizontal"), Input.GetAxis("Vertical"));

        if(movmentDirection != Vector2.zero)
        {
            transform.rotation = Quaternion.RotateTowards(transform.rotation, Quaternion.LookRotation(Vector3.forward, -movmentDirection), rotationSpeed * Time.deltaTime);
        }

        
        
    }

    private void FixedUpdate()
    {   
        if (horizontal != 0 && vertical != 0) // Check for diagonal movement
        {
            // limit movement speed diagonally, so you move at 70% speed
            horizontal *= moveLimiter;
            vertical *= moveLimiter;
        }
        body.velocity = new Vector3(horizontal * runSpeed, vertical * runSpeed);
        
        
    }

    
    
}
