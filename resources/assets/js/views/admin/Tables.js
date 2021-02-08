import React, { Component} from "react";
import { withStyles } from '@material-ui/core/styles';
// components
import HeaderDemography from "../../components/Headers/HeaderDemography.js";
import CardTable from "../../components/Cards/CardTable.js";


const useStyles = theme => ({
appBar: {
  zIndex: theme.zIndex.drawer + 1,
  transition: theme.transitions.create(['width', 'margin'], {
    easing: theme.transitions.easing.sharp,
    duration: theme.transitions.duration.leavingScreen,
  })
}
});


class CheckList extends Component {
  constructor(props) {
    super(props);
    this.state = {
      clientInfo:'',
    }
  }

  changeAppHeaderHandler=(data)=>{
    const getSingleClient_url = "/api/getClientById/"

  axios.get(getSingleClient_url+data.APP_ID).then(response => {
    this.setState({
      clientInfo: data
    })
    
  console.log(response)
  })
 };

  selectClientsHandler=(event)=>{
      const getSingleClient_url = "/api/getClientById/"

    axios.get(getSingleClient_url+event.target.value).then(response => {
      this.setState({
        clientInfo: response.data[0]
      })
      
    console.log(response)
    })
   };
 
   componentDidMount () {
    this.setState({
      clientInfo: this.props.clientInfo
    })
    console.log(this.state.clientInfo)

   }
  render(){
    const {clientInfo} = this.state;
  return (
    <div>
 <div className="flex flex-wrap mt-4">
      <div className="w-full mb-12 px-4">

      </div>
   
     
      <div className="w-full mb-12 px-4">
      
     </div>
     <HeaderDemography clientInfo={this.state.clientInfo} className="mt-21"   onchange={this.changeAppHeaderHandler} />
 </div>

 <div className="w-full mb-12 px-4">

</div>
     
       {/* </div> <div className="w-full mb-12 px-4"> */}
           <CardTable redirecToAppLists={this.props.redirecToAppLists}  onchange={this.selectClientsHandler} 
           clientInfo={this.props.clientInfo} 
            /> 
        {/* </div> */}
      
    </div>
  );
}
}

export default withStyles(useStyles)(CheckList)