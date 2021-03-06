<?php

class User
    extends GetterSetter
{
	private $_id;
    private $_username;
    private $_password;
    private $_email;
    private $_device;

    /**
     * Constructs a new User object.
     *
     * @param   int     $id
     * @param   string  $username
     * @param   string  $password
     * @param	string	$email
     * @param	string	$device
     */
    public function __construct(
            $id, $username, $password, $email, $device
        )
    {
        if (!is_numeric($id))
            throw new Exception("The \$id parameter must be an integer");
        $this->_id = (int) $id;

        $this->_username = $username;
        $this->_password = $password;
        $this->_email = $email;
        $this->_device = $device;
    } // __construct
    
    protected function getId() {
        return $this->_id;
    } // getId

    protected function getUsername() {
        return $this->_username;
    } // getUsername
    
    protected function setUsername($newUsername) {
        $newUsername = trim($newUsername);
        if (empty($newUsername))
            throw new Exception("Username cannot be empty string");
        $this->_username = $newUsername;
    } // setUsername

    protected function getPassword() {
        return $this->_password;
    } // getPassword
    
    protected function setPassword($newPassword) {
        if (empty($newPassword))
            throw new Exception("Password cannot be empty string");
        $this->_password = $newPassword;
    } // setPassword

	protected function getEmail() {
        return $this->_email;
    } // getEmail

	protected function setEmail($newEmail) {
		if (empty($newEmail))
			throw new Exception("Email cannot be empty string");
		$this->_email = $newEmail;
	} //setEmail

	protected function getDevice() {
        return $this->_device;
    } // getDevice
    
	protected function setDevice($newDevice) {
		if (empty($newDevice))
			throw new Exception("Device cannot be empty string");
		$this->_device = $newDevice;
	} //setEmail
	
    public function __toString() {
        return __CLASS__ ."(id=$this->id, username=$this->username, password=$this->password, email=$this->email, device=$this->device)";
    } // __toString

} // class User
