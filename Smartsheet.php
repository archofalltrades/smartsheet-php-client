class Smartsheet
{
    var $baseURL;
    var $accessToken;
    // // Constructor
    public function __construct(){
        $this->baseURL = get_field('baseURL', 'option');
        $this->accessToken = get_field('accessToken', 'option');
        // First, include Requests
        include(get_template_directory_uri().'/library/Requests.php');
        // Next, make sure Requests can load internal classes
        Requests::register_autoloader();
    }

    // Method to get the Sheet
    public function getSheet($ID){
      $url = $this->baseURL . 'sheets/'.$ID;
      $request = Requests::get($url, [ 'Authorization' => 'Bearer '.$this->accessToken ], array('Content-Type' => 'application/json'));
      //return $request->body;
      return json_decode($request->body, true);
    }
    // Method to list all the Sheets
    public function listSheets(){
      $url = $this->baseURL . 'sheets?includeAll=true';
      $request = Requests::get($url, [ 'Authorization' => 'Bearer '.$this->accessToken ], array('Content-Type' => 'application/json'));
      //return $request->body;
      return json_decode($request->body, true);
    }
    // Method to get the Workspace
    public function getWorkspace($ID){
      $url = $this->baseURL . 'workspaces/'.$ID;
      $request = Requests::get($url, [ 'Authorization' => 'Bearer '.$this->accessToken ], array('Content-Type' => 'application/json'));
      //return $request->body;
      return json_decode($request->body, true);
    }
    // Method to list all the Workspaces
    public function listWorkspaces(){
      $url = $this->baseURL . 'workspaces?includeAll=true';
      $request = Requests::get($url, [ 'Authorization' => 'Bearer '.$this->accessToken ], array('Content-Type' => 'application/json'));
      //return $request->body;
      return json_decode($request->body, true);
    }
    // Method to get the User
    public function getUser($ID){
      $url = $this->baseURL . 'users/'.$ID;
      $request = Requests::get($url, [ 'Authorization' => 'Bearer '.$this->accessToken ], array('Content-Type' => 'application/json'));
      //return $request->body;
      return json_decode($request->body, true);
    }
    // Method to list all the Users
    public function listUsers(){
      $url = $this->baseURL . 'users?includeAll=true';
      $request = Requests::get($url, [ 'Authorization' => 'Bearer '.$this->accessToken ], array('Content-Type' => 'application/json'));
      //return $request->body;
      return json_decode($request->body, true);
    }
}
